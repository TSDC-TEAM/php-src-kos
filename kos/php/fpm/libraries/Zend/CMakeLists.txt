set (TARGET_NAME Zend)

set (TARGET_SRC ${PHP_SRC_ROOT}/Zend/Optimizer/zend_optimizer.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/pass1.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/pass3.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/optimize_func_calls.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/block_pass.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/optimize_temp_vars_5.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/nop_removal.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/compact_literals.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/zend_cfg.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/zend_dfg.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/dfa_pass.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/zend_ssa.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/zend_inference.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/zend_func_info.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/zend_call_graph.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/sccp.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/scdf.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/dce.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/escape_analysis.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/compact_vars.c
                ${PHP_SRC_ROOT}/Zend/Optimizer/zend_dump.c
                ${PHP_SRC_ROOT}/Zend/zend_language_parser.c
                ${PHP_SRC_ROOT}/Zend/zend_language_scanner.c
                ${PHP_SRC_ROOT}/Zend/zend_ini_parser.c
                ${PHP_SRC_ROOT}/Zend/zend_ini_scanner.c
                ${PHP_SRC_ROOT}/Zend/zend_alloc.c
                ${PHP_SRC_ROOT}/Zend/zend_compile.c
                ${PHP_SRC_ROOT}/Zend/zend_constants.c
                ${PHP_SRC_ROOT}/Zend/zend_dtrace.c
                ${PHP_SRC_ROOT}/Zend/zend_execute_API.c
                ${PHP_SRC_ROOT}/Zend/zend_highlight.c
                ${PHP_SRC_ROOT}/Zend/zend_llist.c
                ${PHP_SRC_ROOT}/Zend/zend_vm_opcodes.c
                ${PHP_SRC_ROOT}/Zend/zend_opcode.c
                ${PHP_SRC_ROOT}/Zend/zend_operators.c
                ${PHP_SRC_ROOT}/Zend/zend_ptr_stack.c
                ${PHP_SRC_ROOT}/Zend/zend_stack.c
                ${PHP_SRC_ROOT}/Zend/zend_variables.c
                ${PHP_SRC_ROOT}/Zend/zend.c
                ${PHP_SRC_ROOT}/Zend/zend_API.c
                ${PHP_SRC_ROOT}/Zend/zend_extensions.c
                ${PHP_SRC_ROOT}/Zend/zend_hash.c
                ${PHP_SRC_ROOT}/Zend/zend_list.c
                ${PHP_SRC_ROOT}/Zend/zend_builtin_functions.c
                ${PHP_SRC_ROOT}/Zend/zend_attributes.c
                ${PHP_SRC_ROOT}/Zend/zend_execute.c
                ${PHP_SRC_ROOT}/Zend/zend_ini.c
                ${PHP_SRC_ROOT}/Zend/zend_sort.c
                ${PHP_SRC_ROOT}/Zend/zend_multibyte.c
                ${PHP_SRC_ROOT}/Zend/zend_stream.c
                ${PHP_SRC_ROOT}/Zend/zend_iterators.c
                ${PHP_SRC_ROOT}/Zend/zend_interfaces.c
                ${PHP_SRC_ROOT}/Zend/zend_exceptions.c
                ${PHP_SRC_ROOT}/Zend/zend_strtod.c
                ${PHP_SRC_ROOT}/Zend/zend_gc.c
                ${PHP_SRC_ROOT}/Zend/zend_closures.c
                ${PHP_SRC_ROOT}/Zend/zend_weakrefs.c
                ${PHP_SRC_ROOT}/Zend/zend_float.c
                ${PHP_SRC_ROOT}/Zend/zend_string.c
                ${PHP_SRC_ROOT}/Zend/zend_signal.c
                ${PHP_SRC_ROOT}/Zend/zend_generators.c
                ${PHP_SRC_ROOT}/Zend/zend_virtual_cwd.c
                ${PHP_SRC_ROOT}/Zend/zend_ast.c
                ${PHP_SRC_ROOT}/Zend/zend_objects.c
                ${PHP_SRC_ROOT}/Zend/zend_object_handlers.c
                ${PHP_SRC_ROOT}/Zend/zend_objects_API.c
                ${PHP_SRC_ROOT}/Zend/zend_default_classes.c
                ${PHP_SRC_ROOT}/Zend/zend_inheritance.c
                ${PHP_SRC_ROOT}/Zend/zend_smart_str.c
                ${PHP_SRC_ROOT}/Zend/zend_cpuinfo.c
                ${PHP_SRC_ROOT}/Zend/zend_gdb.c
                ${PHP_SRC_ROOT}/Zend/zend_observer.c
                ${PHP_SRC_ROOT}/Zend/zend_system_id.c
                ${PHP_SRC_ROOT}/Zend/zend_enum.c
                ${PHP_SRC_ROOT}/Zend/zend_fibers.c
                ${PHP_SRC_ROOT}/Zend/zend_atomic.c
                ${PHP_SRC_ROOT}/Zend/zend_max_execution_timer.c
                ${PHP_SRC_ROOT}/Zend/asm/make_arm64_aapcs_elf_gas.S
                ${PHP_SRC_ROOT}/Zend/asm/jump_arm64_aapcs_elf_gas.S)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/Zend
                            ${PHP_SRC_ROOT}/Zend/asm)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_ENABLE_STATIC_TSRMLS_CACHE=1
                            ZEND_SIGNALS)
