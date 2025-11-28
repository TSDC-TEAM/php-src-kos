set (TARGET_NAME ext_xmlwriter)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/xmlwriter/php_xmlwriter.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/xmlwriter)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_SIGNALS)
