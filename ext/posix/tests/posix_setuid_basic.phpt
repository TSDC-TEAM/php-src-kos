--TEST--
Test function posix_setuid() by calling it with its expected arguments
--CREDITS--
Marco Fabbri mrfabbri@gmail.com
Francesco Fullone ff@ideato.it
#PHPTestFest Cesena Italia on 2009-06-20
--EXTENSIONS--
posix
--SKIPIF--
<?php if (PHP_OS_FAMILY == "KOS") die("skip KOS setuid() not implemented"); ?>
--FILE--
<?php

$myuid = posix_getuid();
$uid = var_dump(posix_setuid( $myuid ) );

?>
--EXPECT--
bool(true)
