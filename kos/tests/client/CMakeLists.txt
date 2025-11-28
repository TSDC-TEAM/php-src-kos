set (TARGET_NAME Client)
set (TARGET_EDL edl_files_${TARGET_NAME})
set (TARGET_SRC ${PHP_SRC_ROOT}/main/internal_functions_cli.c
                ${PHP_SRC_ROOT}/sapi/cli/php_http_parser.c
                ${PHP_SRC_ROOT}/sapi/cli/php_cli_server.c
                ${PHP_SRC_ROOT}/sapi/cli/ps_title.c
                ${PHP_SRC_ROOT}/sapi/cli/php_cli_process_title.c
                src/php_cli.c)
set (TARGET_LIBS ${PHP_EXT_MODULES}
                 ${PHP_THIRD_PARTY_LIBS})

generate_edl_file (${TARGET_NAME} PREFIX "${PROJECT_NAME}")
nk_build_edl_files (${TARGET_EDL} NK_MODULE "${PROJECT_NAME}" EDL "${EDL_FILE}")

add_executable (${TARGET_NAME} ${TARGET_SRC})
add_dependencies (${TARGET_NAME} ${TARGET_EDL})

target_link_libraries (${TARGET_NAME} ${TARGET_LIBS} vfs::client)

# We do not need default VFS entity here, which comes from vfs::client.
set_target_properties (${TARGET_NAME} PROPERTIES vfs::entity_REPLACEMENT "")

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/sapi/cli
                            ${PHP_SRC_ROOT}/ext/standard)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_ENABLE_STATIC_TSRMLS_CACHE=1
                            ZEND_SIGNALS)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            TESTS_RUN_SCRIPT="${TESTS_RUN_SCRIPT}"
                            TESTS_PATH="${TESTS_PATH}")

add_custom_target (copy_tests
                   COMMAND python3 ${CMAKE_CURRENT_SOURCE_DIR}/copy_tests.py
                           -s ${PHP_SRC_ROOT}
                           -d ${RESOURCES}/hdd/${TESTS_PATH}
                           -m ${CMAKE_CURRENT_SOURCE_DIR}/test_modules.txt
                           -f ${CMAKE_CURRENT_SOURCE_DIR}/test_folders.txt)

add_dependencies (${TARGET_NAME} copy_tests)
