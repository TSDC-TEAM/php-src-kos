add_subdirectory (ext)
add_subdirectory (TSRM)
add_subdirectory (main)
add_subdirectory (Zend)

set (PHP_EXT_MODULES Zend
                     main
                     main_streams
                     ext_standard
                     ext_session
                     ext_openssl
                     ext_fileinfo
                     ext_xmlwriter
                     ext_xmlreader
                     ext_xml
                     ext_tokenizer
                     ext_spl
                     ext_simplexml
                     ext_reflection
                     ext_posix
                     ext_phar
                     ext_pdo_sqlite
                     ext_pdo
                     ext_json
                     ext_iconv
                     ext_hash
                     ext_filter
                     ext_dom
                     ext_ctype
                     ext_sqlite3
                     ext_pcre
                     ext_libxml
                     ext_random
                     ext_date
                     main
                     main_streams
                     PARENT_SCOPE)

set (_THIRD_PARTY_LIBS ssl
                       crypto
                       xml2
                       sqlite3
                       pthread
                       m)

set (PHP_THIRD_PARTY_LIBS ${_THIRD_PARTY_LIBS} PARENT_SCOPE)
