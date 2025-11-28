set (TARGET_NAME ext_hash)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/hash/hash.c
                ${PHP_SRC_ROOT}/ext/hash/hash_md.c
                ${PHP_SRC_ROOT}/ext/hash/hash_sha.c
                ${PHP_SRC_ROOT}/ext/hash/hash_ripemd.c
                ${PHP_SRC_ROOT}/ext/hash/hash_haval.c
                ${PHP_SRC_ROOT}/ext/hash/hash_tiger.c
                ${PHP_SRC_ROOT}/ext/hash/hash_gost.c
                ${PHP_SRC_ROOT}/ext/hash/hash_snefru.c
                ${PHP_SRC_ROOT}/ext/hash/hash_whirlpool.c
                ${PHP_SRC_ROOT}/ext/hash/hash_adler32.c
                ${PHP_SRC_ROOT}/ext/hash/hash_crc32.c
                ${PHP_SRC_ROOT}/ext/hash/hash_fnv.c
                ${PHP_SRC_ROOT}/ext/hash/hash_joaat.c
                ${PHP_SRC_ROOT}/ext/hash/hash_sha3.c
                ${PHP_SRC_ROOT}/ext/hash/hash_murmur.c
                ${PHP_SRC_ROOT}/ext/hash/hash_xxhash.c
                ${PHP_SRC_ROOT}/ext/hash/sha3/generic64lc/KeccakP-1600-opt64.c
                ${PHP_SRC_ROOT}/ext/hash/sha3/generic64lc/KeccakHash.c
                ${PHP_SRC_ROOT}/ext/hash/sha3/generic64lc/KeccakSponge.c
                ${PHP_SRC_ROOT}/ext/hash/murmur/PMurHash.c
                ${PHP_SRC_ROOT}/ext/hash/murmur/PMurHash128.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/hash
                            ${PHP_SRC_ROOT}/ext/hash/sha3/generic64lc
                            ${PHP_SRC_ROOT}/ext/hash/xxhash)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            KeccakP200_excluded
                            KeccakP400_excluded
                            KeccakP800_excluded
                            ZEND_ENABLE_STATIC_TSRMLS_CACHE=1
                            ZEND_SIGNALS)
