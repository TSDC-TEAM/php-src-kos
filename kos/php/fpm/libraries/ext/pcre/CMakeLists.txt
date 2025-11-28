set (TARGET_NAME ext_pcre)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_auto_possess.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_chartables.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_compile.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_config.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_context.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_dfa_match.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_error.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_jit_compile.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_maketables.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_match.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_match_data.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_newline.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_ord2utf.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_pattern_info.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_serialize.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_string_utils.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_study.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_substitute.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_substring.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_tables.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_ucd.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_valid_utf.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_xclass.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_find_bracket.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_convert.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_extuni.c
                ${PHP_SRC_ROOT}/ext/pcre/pcre2lib/pcre2_script_run.c
                ${PHP_SRC_ROOT}/ext/pcre/php_pcre.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/pcre)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            HAVE_CONFIG_H
                            ZEND_ENABLE_STATIC_TSRMLS_CACHE=1
                            ZEND_SIGNALS)
