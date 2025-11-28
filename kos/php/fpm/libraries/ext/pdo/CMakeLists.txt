set (TARGET_NAME ext_pdo)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/pdo/pdo.c
                ${PHP_SRC_ROOT}/ext/pdo/pdo_dbh.c
                ${PHP_SRC_ROOT}/ext/pdo/pdo_stmt.c
                ${PHP_SRC_ROOT}/ext/pdo/pdo_sql_parser.c
                ${PHP_SRC_ROOT}/ext/pdo/pdo_sqlstate.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/pdo)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_SIGNALS)
