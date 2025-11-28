set (TARGET_NAME ext_random)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/random/random.c
                ${PHP_SRC_ROOT}/ext/random/engine_combinedlcg.c
                ${PHP_SRC_ROOT}/ext/random/engine_mt19937.c
                ${PHP_SRC_ROOT}/ext/random/engine_pcgoneseq128xslrr64.c
                ${PHP_SRC_ROOT}/ext/random/engine_xoshiro256starstar.c
                ${PHP_SRC_ROOT}/ext/random/engine_secure.c
                ${PHP_SRC_ROOT}/ext/random/engine_user.c
                ${PHP_SRC_ROOT}/ext/random/randomizer.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/random)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_SIGNALS
                            ZEND_ENABLE_STATIC_TSRMLS_CACHE=1)
