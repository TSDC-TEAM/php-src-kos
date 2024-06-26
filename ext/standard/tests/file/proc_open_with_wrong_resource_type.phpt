--TEST--
proc_open does not leak memory when called with wrong resource type in descriptorspec
--SKIPIF--
<?php if (PHP_OS_FAMILY == "KOS") die("skip KOS.PROC_OPEN test requiring proc_open function"); ?>
--FILE--
<?php
    $context = stream_context_create();
    try {
      proc_open('not_a_real_command_but_I_dont_care', array(0 => $context), $pipes);
      echo "Not reached";
    } catch (TypeError $e) {
      echo $e->getMessage(), "\n";
    }
?>
--EXPECT--
proc_open(): supplied resource is not a valid stream resource
