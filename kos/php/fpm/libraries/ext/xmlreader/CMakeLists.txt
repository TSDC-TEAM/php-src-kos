set (TARGET_NAME ext_xmlreader)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/xmlreader/php_xmlreader.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/xmlreader)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_SIGNALS)
