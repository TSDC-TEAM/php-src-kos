set (TARGET_NAME ext_session)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/session/mod_user_class.c
                ${PHP_SRC_ROOT}/ext/session/session.c
                ${PHP_SRC_ROOT}/ext/session/mod_files.c
                ${PHP_SRC_ROOT}/ext/session/mod_mm.c
                ${PHP_SRC_ROOT}/ext/session/mod_user.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/session)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_ENABLE_STATIC_TSRMLS_CACHE=1
                            ZEND_SIGNALS)
