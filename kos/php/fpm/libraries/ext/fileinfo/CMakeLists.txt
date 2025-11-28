set (TARGET_NAME ext_fileinfo)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/fileinfo/fileinfo.c
                ${PHP_SRC_ROOT}/ext/fileinfo/libmagic/apprentice.c
                ${PHP_SRC_ROOT}/ext/fileinfo/libmagic/apptype.c
                ${PHP_SRC_ROOT}/ext/fileinfo/libmagic/ascmagic.c
                ${PHP_SRC_ROOT}/ext/fileinfo/libmagic/cdf.c
                ${PHP_SRC_ROOT}/ext/fileinfo/libmagic/cdf_time.c
                ${PHP_SRC_ROOT}/ext/fileinfo/libmagic/compress.c
                ${PHP_SRC_ROOT}/ext/fileinfo/libmagic/encoding.c
                ${PHP_SRC_ROOT}/ext/fileinfo/libmagic/fsmagic.c
                ${PHP_SRC_ROOT}/ext/fileinfo/libmagic/funcs.c
                ${PHP_SRC_ROOT}/ext/fileinfo/libmagic/is_json.c
                ${PHP_SRC_ROOT}/ext/fileinfo/libmagic/is_tar.c
                ${PHP_SRC_ROOT}/ext/fileinfo/libmagic/magic.c
                ${PHP_SRC_ROOT}/ext/fileinfo/libmagic/print.c
                ${PHP_SRC_ROOT}/ext/fileinfo/libmagic/readcdf.c
                ${PHP_SRC_ROOT}/ext/fileinfo/libmagic/softmagic.c
                ${PHP_SRC_ROOT}/ext/fileinfo/libmagic/der.c
                ${PHP_SRC_ROOT}/ext/fileinfo/libmagic/buffer.c
                ${PHP_SRC_ROOT}/ext/fileinfo/libmagic/is_csv.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/fileinfo/libmagic
                            ${PHP_SRC_ROOT}/ext/fileinfo)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_SIGNALS)
