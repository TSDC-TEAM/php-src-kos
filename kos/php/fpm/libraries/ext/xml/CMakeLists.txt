set (TARGET_NAME ext_xml)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/xml/xml.c
                ${PHP_SRC_ROOT}/ext/xml/compat.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/xml)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_ENABLE_STATIC_TSRMLS_CACHE=1
                            ZEND_SIGNALS)
