set (TARGET_NAME ext_tokenizer)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/tokenizer/tokenizer.c
                ${PHP_SRC_ROOT}/ext/tokenizer/tokenizer_data.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/tokenizer)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_SIGNALS)
