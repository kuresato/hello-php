<?php
$file = '/tmp/test.txt';
$data = "test data\n";
file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
?>

