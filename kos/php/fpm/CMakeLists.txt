add_subdirectory (libraries)

set (TARGET_NAME Fpm)
set (TARGET_EDL edl_files_${TARGET_NAME})
set (TARGET_SRC ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm_children.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm_cleanup.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm_clock.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm_conf.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm_env.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm_events.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm_log.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm_main.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm_php.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm_process_ctl.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm_request.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm_shm.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm_scoreboard.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm_signals.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm_sockets.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm_status.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm_stdio.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm_unix.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/fpm_worker_pool.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/zlog.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/events/select.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/events/poll.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/events/epoll.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/events/kqueue.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/events/devpoll.c
                ${PHP_SRC_ROOT}/sapi/fpm/fpm/events/port.c)
set (TARGET_LIBS ${PHP_EXT_MODULES}
                 ${PHP_THIRD_PARTY_LIBS})

generate_edl_file (${TARGET_NAME} PREFIX "${PROJECT_NAME}")
nk_build_edl_files (${TARGET_EDL} NK_MODULE "${PROJECT_NAME}" EDL "${EDL_FILE}")

add_executable (${TARGET_NAME} ${TARGET_SRC})
add_dependencies (${TARGET_NAME} ${TARGET_EDL})
target_link_libraries (${TARGET_NAME} ${TARGET_LIBS} vfs::client)

# We do not need default VFS entity here, which comes from vfs::client.
set_target_properties (${TARGET_NAME} PROPERTIES vfs::entity_REPLACEMENT "")

# Setting common target php::Fpm properties.
set_target_properties (${TARGET_NAME} PROPERTIES
                       DESCRIPTION    "FastCGI Process Manager program"
                       HW_ENTITY      ${PROJECT_NAME}::${TARGET_NAME}
                       SECURITY_PSL   ${PROJECT_NAME}/${TARGET_NAME}.psl)

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/sapi/fpm)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_ENABLE_STATIC_TSRMLS_CACHE=1
                            ZEND_SIGNALS)

install_security_psl (FILE "${CMAKE_CURRENT_SOURCE_DIR}/${TARGET_NAME}.psl"
                      PREFIX "${PROJECT_NAME}")

set (EXPORT_TARGETS ${EXPORT_TARGETS} ${TARGET_NAME} PARENT_SCOPE)
