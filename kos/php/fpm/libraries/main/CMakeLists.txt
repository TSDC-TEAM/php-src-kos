set (TARGET_NAME main)

set (TARGET_SRC ${PHP_SRC_ROOT}/main/main.c
                ${PHP_SRC_ROOT}/main/snprintf.c
                ${PHP_SRC_ROOT}/main/spprintf.c
                ${PHP_SRC_ROOT}/main/fopen_wrappers.c
                ${PHP_SRC_ROOT}/main/php_scandir.c
                ${PHP_SRC_ROOT}/main/php_ini_builder.c
                ${PHP_SRC_ROOT}/main/php_ini.c
                ${PHP_SRC_ROOT}/main/SAPI.c
                ${PHP_SRC_ROOT}/main/rfc1867.c
                ${PHP_SRC_ROOT}/main/php_content_types.c
                ${PHP_SRC_ROOT}/main/strlcpy.c
                ${PHP_SRC_ROOT}/main/strlcat.c
                ${PHP_SRC_ROOT}/main/explicit_bzero.c
                ${PHP_SRC_ROOT}/main/reentrancy.c
                ${PHP_SRC_ROOT}/main/php_variables.c
                ${PHP_SRC_ROOT}/main/php_ticks.c
                ${PHP_SRC_ROOT}/main/network.c
                ${PHP_SRC_ROOT}/main/php_open_temporary_file.c
                ${PHP_SRC_ROOT}/main/php_odbc_utils.c
                ${PHP_SRC_ROOT}/main/safe_bcmp.c
                ${PHP_SRC_ROOT}/main/output.c
                ${PHP_SRC_ROOT}/main/getopt.c
                ${PHP_SRC_ROOT}/main/php_syslog.c
                ${PHP_SRC_ROOT}/main/internal_functions_cli.c
                ${PHP_SRC_ROOT}/main/fastcgi.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/main)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_ENABLE_STATIC_TSRMLS_CACHE=1
                            ZEND_SIGNALS)

add_subdirectory (streams)
