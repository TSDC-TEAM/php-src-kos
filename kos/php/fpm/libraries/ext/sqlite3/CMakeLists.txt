set (TARGET_NAME ext_sqlite3)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/sqlite3/sqlite3.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/sqlite3)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_SIGNALS
                            ZEND_ENABLE_STATIC_TSRMLS_CACHE=1)
