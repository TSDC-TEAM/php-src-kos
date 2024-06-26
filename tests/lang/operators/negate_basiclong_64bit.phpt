--TEST--
Test -N operator : 64bit long tests
--SKIPIF--
<?php if (PHP_OS_FAMILY == "KOS") die("skip KOS failed test"); ?>
<?php
if (PHP_INT_SIZE != 8) die("skip this test is for 64bit platform only");
?>
--FILE--
<?php

define("MAX_64Bit", 9223372036854775807);
define("MAX_32Bit", 2147483647);
define("MIN_64Bit", -9223372036854775807 - 1);
define("MIN_32Bit", -2147483647 - 1);

$longVals = array(
    MAX_64Bit, MIN_64Bit, MAX_32Bit, MIN_32Bit, MAX_64Bit - MAX_32Bit, MIN_64Bit - MIN_32Bit,
    MAX_32Bit + 1, MIN_32Bit - 1, MAX_32Bit * 2, (MAX_32Bit * 2) + 1, (MAX_32Bit * 2) - 1,
    MAX_64Bit -1, MAX_64Bit + 1, MIN_64Bit + 1, MIN_64Bit - 1
);


foreach ($longVals as $longVal) {
   echo "--- testing: $longVal ---\n";
   var_dump(-$longVal);
}

?>
--EXPECT--
--- testing: 9223372036854775807 ---
int(-9223372036854775807)
--- testing: -9223372036854775808 ---
float(9.223372036854776E+18)
--- testing: 2147483647 ---
int(-2147483647)
--- testing: -2147483648 ---
int(2147483648)
--- testing: 9223372034707292160 ---
int(-9223372034707292160)
--- testing: -9223372034707292160 ---
int(9223372034707292160)
--- testing: 2147483648 ---
int(-2147483648)
--- testing: -2147483649 ---
int(2147483649)
--- testing: 4294967294 ---
int(-4294967294)
--- testing: 4294967295 ---
int(-4294967295)
--- testing: 4294967293 ---
int(-4294967293)
--- testing: 9223372036854775806 ---
int(-9223372036854775806)
--- testing: 9.2233720368548E+18 ---
float(-9.223372036854776E+18)
--- testing: -9223372036854775807 ---
int(9223372036854775807)
--- testing: -9.2233720368548E+18 ---
float(9.223372036854776E+18)
