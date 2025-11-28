set (TARGET_NAME ext_dom)

set (TARGET_SRC ${PHP_SRC_ROOT}/ext/dom/php_dom.c
                ${PHP_SRC_ROOT}/ext/dom/attr.c
                ${PHP_SRC_ROOT}/ext/dom/document.c
                ${PHP_SRC_ROOT}/ext/dom/domexception.c
                ${PHP_SRC_ROOT}/ext/dom/parentnode.c
                ${PHP_SRC_ROOT}/ext/dom/processinginstruction.c
                ${PHP_SRC_ROOT}/ext/dom/cdatasection.c
                ${PHP_SRC_ROOT}/ext/dom/documentfragment.c
                ${PHP_SRC_ROOT}/ext/dom/domimplementation.c
                ${PHP_SRC_ROOT}/ext/dom/element.c
                ${PHP_SRC_ROOT}/ext/dom/node.c
                ${PHP_SRC_ROOT}/ext/dom/characterdata.c
                ${PHP_SRC_ROOT}/ext/dom/documenttype.c
                ${PHP_SRC_ROOT}/ext/dom/entity.c
                ${PHP_SRC_ROOT}/ext/dom/nodelist.c
                ${PHP_SRC_ROOT}/ext/dom/text.c
                ${PHP_SRC_ROOT}/ext/dom/comment.c
                ${PHP_SRC_ROOT}/ext/dom/entityreference.c
                ${PHP_SRC_ROOT}/ext/dom/notation.c
                ${PHP_SRC_ROOT}/ext/dom/xpath.c
                ${PHP_SRC_ROOT}/ext/dom/dom_iterators.c
                ${PHP_SRC_ROOT}/ext/dom/namednodemap.c)

add_library (${TARGET_NAME} STATIC ${TARGET_SRC})

target_include_directories (${TARGET_NAME} PRIVATE
                            ${PHP_SRC_ROOT}/ext/dom)

target_compile_definitions (${TARGET_NAME} PRIVATE
                            ZEND_SIGNALS)
