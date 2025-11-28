set (TARGET_NAME main_streams)

set (TARGET_SRC ${PHP_SRC_ROOT}/main/streams/streams.c
                ${PHP_SRC_ROOT}/main/streams/cast.c
                ${PHP_SRC_ROOT}/main/streams/memory.c
                ${PHP_SRC_ROOT}/main/streams/filter.c
                ${PHP_SRC_ROOT}/main/streams/plain_wrapper.c
                ${PHP_SRC_ROOT}/main/streams/userspace.c
                ${PHP_SRC_ROOT}/main/streams/transports.c
                ${PHP_SRC_ROOT}/main/streams/xp_socket.c
                ${PHP_SRC_ROOT}/main/streams/mmap.c
                ${PHP_SRC_ROOT}/main/streams/glob_wrapper.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/main/streams)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_ENABLE_STATIC_TSRMLS_CACHE=1
                            ZEND_SIGNALS)
