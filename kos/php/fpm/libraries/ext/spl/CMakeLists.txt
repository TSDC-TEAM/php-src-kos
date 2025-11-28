set (TARGET_NAME ext_spl)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/spl/php_spl.c
                ${PHP_SRC_ROOT}/ext/spl/spl_functions.c
                ${PHP_SRC_ROOT}/ext/spl/spl_iterators.c
                ${PHP_SRC_ROOT}/ext/spl/spl_array.c
                ${PHP_SRC_ROOT}/ext/spl/spl_directory.c
                ${PHP_SRC_ROOT}/ext/spl/spl_exceptions.c
                ${PHP_SRC_ROOT}/ext/spl/spl_observer.c
                ${PHP_SRC_ROOT}/ext/spl/spl_dllist.c
                ${PHP_SRC_ROOT}/ext/spl/spl_heap.c
                ${PHP_SRC_ROOT}/ext/spl/spl_fixedarray.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/spl)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_SIGNALS
                            ZEND_ENABLE_STATIC_TSRMLS_CACHE=1)
