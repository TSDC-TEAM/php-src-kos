set (TARGET_NAME ext_simplexml)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/simplexml/simplexml.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/simplexml)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_SIGNALS)
