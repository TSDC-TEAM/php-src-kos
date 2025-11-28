set (TARGET_NAME ext_date)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/date/php_date.c
                ${PHP_SRC_ROOT}/ext/date/lib/astro.c
                ${PHP_SRC_ROOT}/ext/date/lib/dow.c
                ${PHP_SRC_ROOT}/ext/date/lib/parse_date.c
                ${PHP_SRC_ROOT}/ext/date/lib/parse_tz.c
                ${PHP_SRC_ROOT}/ext/date/lib/parse_posix.c
                ${PHP_SRC_ROOT}/ext/date/lib/timelib.c
                ${PHP_SRC_ROOT}/ext/date/lib/tm2unixtime.c
                ${PHP_SRC_ROOT}/ext/date/lib/unixtime2tm.c
                ${PHP_SRC_ROOT}/ext/date/lib/parse_iso_intervals.c
                ${PHP_SRC_ROOT}/ext/date/lib/interval.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/date)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_SIGNALS
                            ZEND_ENABLE_STATIC_TSRMLS_CACHE=1
                            HAVE_TIMELIB_CONFIG_H=1)
