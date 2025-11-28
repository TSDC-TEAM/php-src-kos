set (TARGET_NAME ext_pdo_sqlite)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/pdo_sqlite/pdo_sqlite.c
                ${PHP_SRC_ROOT}/ext/pdo_sqlite/sqlite_driver.c
                ${PHP_SRC_ROOT}/ext/pdo_sqlite/sqlite_statement.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext
                            ${PHP_SRC_ROOT}/ext/pdo_sqlite)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_SIGNALS)
