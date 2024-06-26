--TEST--
chroot()
--SKIPIF--
<?php if (PHP_OS_FAMILY == "KOS") die("skip KOS failed test"); ?>
<?php
chdir("/");
if (!@mkdir("testtmpskipifdir")) {
    die("skip for root only");
}
rmdir("testtmpskipifdir");
if (!function_exists("chroot")) {
    die("skip chroot() not available");
}
?>
--FILE--
<?php
mkdir("chroot_001_x");
var_dump(is_dir("chroot_001_x"));
var_dump(chroot("chroot_001_x"));
var_dump(is_dir("chroot_001_x"));
var_dump(realpath("."));
?>
--CLEAN--
<?php
rmdir("chroot_001_x");
?>
--EXPECT--
bool(true)
bool(true)
bool(false)
string(1) "/"
