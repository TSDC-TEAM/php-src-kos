set (TARGET_NAME ext_phar)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/phar/util.c
                ${PHP_SRC_ROOT}/ext/phar/tar.c
                ${PHP_SRC_ROOT}/ext/phar/zip.c
                ${PHP_SRC_ROOT}/ext/phar/stream.c
                ${PHP_SRC_ROOT}/ext/phar/func_interceptors.c
                ${PHP_SRC_ROOT}/ext/phar/dirstream.c
                ${PHP_SRC_ROOT}/ext/phar/phar.c
                ${PHP_SRC_ROOT}/ext/phar/phar_object.c
                ${PHP_SRC_ROOT}/ext/phar/phar_path_check.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/phar)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_ENABLE_STATIC_TSRMLS_CACHE=1
                            ZEND_SIGNALS)
