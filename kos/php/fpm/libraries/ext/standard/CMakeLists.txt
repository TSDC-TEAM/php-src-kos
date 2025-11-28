set (TARGET_NAME ext_standard)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/standard/crypt_freesec.c
                ${PHP_SRC_ROOT}/ext/standard/crypt_blowfish.c
                ${PHP_SRC_ROOT}/ext/standard/crypt_sha512.c
                ${PHP_SRC_ROOT}/ext/standard/crypt_sha256.c
                ${PHP_SRC_ROOT}/ext/standard/php_crypt_r.c
                ${PHP_SRC_ROOT}/ext/standard/array.c
                ${PHP_SRC_ROOT}/ext/standard/base64.c
                ${PHP_SRC_ROOT}/ext/standard/basic_functions.c
                ${PHP_SRC_ROOT}/ext/standard/browscap.c
                ${PHP_SRC_ROOT}/ext/standard/crc32.c
                ${PHP_SRC_ROOT}/ext/standard/crypt.c
                ${PHP_SRC_ROOT}/ext/standard/datetime.c
                ${PHP_SRC_ROOT}/ext/standard/dir.c
                ${PHP_SRC_ROOT}/ext/standard/dl.c
                ${PHP_SRC_ROOT}/ext/standard/dns.c
                ${PHP_SRC_ROOT}/ext/standard/exec.c
                ${PHP_SRC_ROOT}/ext/standard/file.c
                ${PHP_SRC_ROOT}/ext/standard/filestat.c
                ${PHP_SRC_ROOT}/ext/standard/flock_compat.c
                ${PHP_SRC_ROOT}/ext/standard/formatted_print.c
                ${PHP_SRC_ROOT}/ext/standard/fsock.c
                ${PHP_SRC_ROOT}/ext/standard/head.c
                ${PHP_SRC_ROOT}/ext/standard/html.c
                ${PHP_SRC_ROOT}/ext/standard/image.c
                ${PHP_SRC_ROOT}/ext/standard/info.c
                ${PHP_SRC_ROOT}/ext/standard/iptc.c
                ${PHP_SRC_ROOT}/ext/standard/link.c
                ${PHP_SRC_ROOT}/ext/standard/mail.c
                ${PHP_SRC_ROOT}/ext/standard/math.c
                ${PHP_SRC_ROOT}/ext/standard/md5.c
                ${PHP_SRC_ROOT}/ext/standard/metaphone.c
                ${PHP_SRC_ROOT}/ext/standard/microtime.c
                ${PHP_SRC_ROOT}/ext/standard/pack.c
                ${PHP_SRC_ROOT}/ext/standard/pageinfo.c
                ${PHP_SRC_ROOT}/ext/standard/quot_print.c
                ${PHP_SRC_ROOT}/ext/standard/soundex.c
                ${PHP_SRC_ROOT}/ext/standard/string.c
                ${PHP_SRC_ROOT}/ext/standard/scanf.c
                ${PHP_SRC_ROOT}/ext/standard/syslog.c
                ${PHP_SRC_ROOT}/ext/standard/type.c
                ${PHP_SRC_ROOT}/ext/standard/uniqid.c
                ${PHP_SRC_ROOT}/ext/standard/url.c
                ${PHP_SRC_ROOT}/ext/standard/var.c
                ${PHP_SRC_ROOT}/ext/standard/versioning.c
                ${PHP_SRC_ROOT}/ext/standard/assert.c
                ${PHP_SRC_ROOT}/ext/standard/strnatcmp.c
                ${PHP_SRC_ROOT}/ext/standard/levenshtein.c
                ${PHP_SRC_ROOT}/ext/standard/incomplete_class.c
                ${PHP_SRC_ROOT}/ext/standard/url_scanner_ex.c
                ${PHP_SRC_ROOT}/ext/standard/ftp_fopen_wrapper.c
                ${PHP_SRC_ROOT}/ext/standard/http_fopen_wrapper.c
                ${PHP_SRC_ROOT}/ext/standard/php_fopen_wrapper.c
                ${PHP_SRC_ROOT}/ext/standard/credits.c
                ${PHP_SRC_ROOT}/ext/standard/css.c
                ${PHP_SRC_ROOT}/ext/standard/var_unserializer.c
                ${PHP_SRC_ROOT}/ext/standard/ftok.c
                ${PHP_SRC_ROOT}/ext/standard/sha1.c
                ${PHP_SRC_ROOT}/ext/standard/user_filters.c
                ${PHP_SRC_ROOT}/ext/standard/uuencode.c
                ${PHP_SRC_ROOT}/ext/standard/filters.c
                ${PHP_SRC_ROOT}/ext/standard/proc_open.c
                ${PHP_SRC_ROOT}/ext/standard/proc_open_kos.c
                ${PHP_SRC_ROOT}/ext/standard/streamsfuncs.c
                ${PHP_SRC_ROOT}/ext/standard/http.c
                ${PHP_SRC_ROOT}/ext/standard/password.c
                ${PHP_SRC_ROOT}/ext/standard/net.c
                ${PHP_SRC_ROOT}/ext/standard/hrtime.c
                ${PHP_SRC_ROOT}/ext/standard/crc32_x86.c
                ${PHP_SRC_ROOT}/ext/standard/libavifinfo/avifinfo.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/standard
                            ${PHP_SRC_ROOT}/main)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_ENABLE_STATIC_TSRMLS_CACHE=1
                            ZEND_SIGNALS)

target_link_libraries (${TARGET_NAME} PUBLIC z)
