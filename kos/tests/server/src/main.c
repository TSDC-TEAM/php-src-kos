#ifdef __KOS__
# include <strict/c/stdio.h>
# include <strict/posix/unistd.h>
# include <strict/c/stdlib.h>
# include <strict/posix/sys/socket.h>
# include <strict/posix/fcntl.h>
# include <em_transport/em_transport.h>
#else
# include <sys/socket.h>
# include <pthread.h>
# include <fcntl.h>
# include <errno.h>
#endif

#include "proc_open_kos.h"

#include <limits.h>
#include <unistd.h>

void* kos_main(void *args);

void dump_data(const char *data, ssize_t size) {
    fprintf(stderr, "Bytes: %zd\n", size);
    for (ssize_t i = 0; i < size; ++i) {
        fprintf(stderr, "%02X ", data[i]);
    }
    fprintf(stderr, "\n");
}

size_t read_stdout_dump(const char* dump_file, char *buffer, size_t size) {
    int fd = open(dump_file, O_RDONLY, 0600);
    if (0 >= fd) {
        return 0;
    }
    ssize_t bytes = read(fd, buffer, size);
    close(fd);
    return bytes > 0 ? (size_t)bytes : 0;
}

int wait_request(int socket) {
    int trying_to_receive = 10000;
    int client = -1;

    // Simple implement select() with timer
    while (client <= 0) {
        client = accept(socket, NULL, NULL);

        --trying_to_receive;
        if (0 == trying_to_receive) {
            break;
        }

        usleep(10000);
    }

    return client;
}

int send_response(int socket, int rc, const char* dump_file) {
    char response[KOS_TESTING_BUF_SIZE + 3] = {0};

    sprintf(response, "%03d", rc);

    size_t bytes = read_stdout_dump(dump_file, response + 3, KOS_TESTING_BUF_SIZE);
    ssize_t res_send = send(socket, response, bytes + 3, 0);
    if (0 > res_send) {
        fprintf(stderr, "Server: Can't send response\n");
        return 1;
    }

    return 0;
}

int main(int argc, char *argv[]) {
    static const char *stdout_dump_file = "/tmp/stdout.log";

    const int main_sock = create_local_server_nonblocking_socket(KOS_TESTING_PORT);

    if (em_notify_ready() != rcOk) {
        fprintf(stderr, "Server: EM notification failed\n");
        close(main_sock);
        return EXIT_FAILURE;
    }

    while (1) {
        // Simple implement select() with timer
        int cur_sock = wait_request(main_sock);
        if (0 > cur_sock) {
            fprintf(stderr, "Server can't get new request\n");
            break;
        }

        // Receive command for main() thread
        char request[KOS_TESTING_BUF_SIZE] = {0};
        int res_recv = recv_while_eof(cur_sock, request, KOS_TESTING_BUF_SIZE);
        if (0 >= res_recv) {
            fprintf(stderr, "Server: failed to recv data or empty data\n");
            close(cur_sock);
            continue;
        }

        // If `Client` said done, stop working
        if (strcmp(request, "End") == 0) {
            close(cur_sock);
            close(main_sock);
            break;
        }

        // Before running main() thread update working dir
        chdir(TESTS_PATH);

        int save_stdout = dup(STDOUT_FILENO);
        int stdout_dump = open(stdout_dump_file, O_RDWR | O_CREAT | O_APPEND, 0600);
        if (0 > dup2(stdout_dump, STDOUT_FILENO)) {
            fprintf(stderr, "Server: Can't dup2 stdout\n");
            break;
        }

        // Collect and split arguments
        kos_args_t* data = split(request);

        // Start main() thread
        int main_rc = create_thread_and_join(data, kos_main);

        free_kos_args(data);

        // Flush and restore stdout
        fflush(stdout);
        close(stdout_dump);
        dup2(save_stdout, STDOUT_FILENO);
        close(save_stdout);

        // Send response to client and close connection
        send_response(cur_sock, main_rc, stdout_dump_file);

        close(cur_sock);

        remove(stdout_dump_file);
    }

    return 0;
}
