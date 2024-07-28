<?php
require_once 'functions/fileFunctions.php';
require_once 'functions/userFunction.php';

write('test.txt', fgets(STDIN),true);

$result = lastOpen('test.txt');
echo $result.PHP_EOL;


