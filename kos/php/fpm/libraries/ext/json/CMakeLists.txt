set (TARGET_NAME ext_json)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/json/json.c
                ${PHP_SRC_ROOT}/ext/json/json_encoder.c
                ${PHP_SRC_ROOT}/ext/json/json_parser.tab.c
                ${PHP_SRC_ROOT}/ext/json/json_scanner.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/json)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_ENABLE_STATIC_TSRMLS_CACHE=1
                            ZEND_SIGNALS)
