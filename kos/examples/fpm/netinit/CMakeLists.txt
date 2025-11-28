set (TARGET_NAME NetInit)
set (TARGET_EDL edl_files_${TARGET_NAME})

generate_edl_file (${TARGET_NAME} PREFIX "netinit")
nk_build_edl_files (${TARGET_EDL} NK_MODULE "netinit" EDL "${EDL_FILE}")

add_executable (${TARGET_NAME} "src/main.c")
add_dependencies (${TARGET_NAME} ${TARGET_EDL})
target_link_libraries (${TARGET_NAME} vfs::client)

# We do not need the default VFS entity which comes from vfs::client.
set_target_properties (${TARGET_NAME} PROPERTIES vfs::entity_REPLACEMENT "")
