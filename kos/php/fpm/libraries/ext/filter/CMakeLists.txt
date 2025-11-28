set (TARGET_NAME ext_filter)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/filter/filter.c
                ${PHP_SRC_ROOT}/ext/filter/sanitizing_filters.c
                ${PHP_SRC_ROOT}/ext/filter/logical_filters.c
                ${PHP_SRC_ROOT}/ext/filter/callback_filter.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/filter)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_SIGNALS
                            ZEND_ENABLE_STATIC_TSRMLS_CACHE=1)
