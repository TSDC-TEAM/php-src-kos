set (TARGET_NAME ext_openssl)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/openssl/openssl.c
                ${PHP_SRC_ROOT}/ext/openssl/xp_ssl.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/openssl)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_SIGNALS)
