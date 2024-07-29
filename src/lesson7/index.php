<?php
require_once 'functions/fileFunctions.php';
require_once 'functions/userFunction.php';

write('test.txt', fgets(STDIN), true);
$file = fopen('test.txt', 'r');
$last = lastOpen1($file);
print_r($last);

$result = lastOpen2('test.txt');
echo $result . PHP_EOL;
fclose($file);

$line = file('test.txt');
$lastEle = $line[count($line) - 1];
echo $lastEle;