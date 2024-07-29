<?php
require_once 'functions/fileFunctions.php';
require_once 'functions/userFunction.php';

write('test.txt', fgets(STDIN), true);
$file = fopen('test.txt', 'r');
$last = lastOpen1($file);
echo $last;

$result = lastOpen2('test.txt');
echo $result . PHP_EOL;
fclose($file);
