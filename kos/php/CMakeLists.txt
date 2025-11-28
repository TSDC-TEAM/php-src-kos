cmake_minimum_required (VERSION 3.25)
project (php LANGUAGES C CXX ASM VERSION 8.2.8)

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

# Add functions for installing artefacts.
include (platform/install)

# Toolchain for working with the NK-parser.
include (platform/nk)

# Add a package for working with the virtual file system.
find_package (vfs REQUIRED)

# Add a package with VFS program implementations.
find_package (precompiled_vfs REQUIRED)
include_directories (${precompiled_vfs_INCLUDE})

set (EXPORT_TARGETS)

include_directories (${PHP_SRC_ROOT}
                     ${PHP_SRC_ROOT}/main
                     ${PHP_SRC_ROOT}/TSRM
                     ${PHP_SRC_ROOT}/Zend
                     ${OPENSSL_ROOT_DIR}/include)

foreach (ITEM ${CMAKE_SYSTEM_PREFIX_PATH})
    include_directories (${ITEM}/include/libxml2)
endforeach ()

# Add subdirectory with FPM program implemetation.
add_subdirectory (fpm)

# Install rules.
export_targets (TARGETS ${EXPORT_TARGETS}
                GENERATE_CONFIG_IN
                NO_SET_AND_CHECK_MACRO)

# Uninstall rule.
if (NOT TARGET uninstall)
    configure_file ("${CMAKE_CURRENT_SOURCE_DIR}/cmake_uninstall.cmake.in"
                    "${CMAKE_CURRENT_BINARY_DIR}/cmake_uninstall.cmake"
                    IMMEDIATE @ONLY)

    add_custom_target (uninstall
        COMMAND ${CMAKE_COMMAND} -P ${CMAKE_CURRENT_BINARY_DIR}/cmake_uninstall.cmake)
endif ()
