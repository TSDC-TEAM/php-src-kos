cmake_minimum_required (VERSION 3.25)
project (php_tests LANGUAGES C CXX ASM VERSION 8.2.8)

set (CMAKE_CXX_VISIBILITY_PRESET hidden)
set (CMAKE_CXX_FLAGS "${CMAKE_CXX_FLAGS} -Wall -Wno-strict-aliasing -fexceptions")

# Path to php sources.
get_filename_component (PHP_SRC_ROOT "${CMAKE_CURRENT_LIST_DIR}/../../" ABSOLUTE)
get_filename_component (THIRD_PARTY_ROOT_DIR  "${PHP_SRC_ROOT}/third_party" ABSOLUTE)
set (OPENSSL_ROOT_DIR ${THIRD_PARTY_ROOT_DIR}/openssl)

# Initialize CMake library for KasperskyOS SDK.
include (platform)
initialize_platform (FORCE_STATIC)

# Set the linker and compiler flags.
project_header_default ("STANDARD_GNU_17:YES" "STRICT_WARNINGS:YES")

# Toolchain for working with the NK-parser.
include (platform/nk)

# Add a package for working with the virtual file system.
find_package (vfs REQUIRED)

# Add a package with the Dhcpcd program implementation.
find_package (rump REQUIRED COMPONENTS DHCPCD_ENTITY)
include_directories (${rump_INCLUDE})

# Add a package with VFS program implementations.
find_package (precompiled_vfs REQUIRED)
include_directories (${precompiled_vfs_INCLUDE})

include_directories (${PHP_SRC_ROOT}
                     ${PHP_SRC_ROOT}/main
                     ${PHP_SRC_ROOT}/TSRM
                     ${PHP_SRC_ROOT}/Zend
                     ${OPENSSL_ROOT_DIR}/include)

foreach (ITEM ${CMAKE_SYSTEM_PREFIX_PATH})
    include_directories (${ITEM}/include/libxml2)
endforeach ()

set (RESOURCES 		  "${CMAKE_SOURCE_DIR}/resources")

set (TESTS_ROOT 	  "")
set (TESTS_RUN_SCRIPT "${TESTS_ROOT}/run-tests.php")
set (TESTS_PATH 	  "${TESTS_ROOT}/tests/")

add_subdirectory (../php/fpm/libraries ${CMAKE_BINARY_DIR}/libraries)
add_subdirectory (server)
add_subdirectory (client)
add_subdirectory (einit)
