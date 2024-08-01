<?php
require_once __DIR__ . '/File.php';
require_once __DIR__ . '/FileType.php';
//var_dump(FileType::TXT->name);
$cases = FileType::cases();
//foreach ($cases as $case) {
//    echo $case->value.PHP_EOL;
//}

try {
    $file = new File('test.txt');
    $file->write('Go to sweem'.PHP_EOL);
//    $lines = $file->getLines();
//    print_r($lines);
//    echo $file->getLastLine();
//    $file->setPath('test222.txt');

//    echo $file->getPath();
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
//    echo $exception->getFile() .PHP_EOL;
//    echo $exception->getLine() .PHP_EOL;
//    echo $exception->getTraceAsString() .PHP_EOL;
//    echo $exception->getCode() .PHP_EOL;
//    echo $exception->getPrevious() .PHP_EOL;
//    echo $exception->getTraceAsString() .PHP_EOL;
}
//var_dump(pathinfo('var/www/test.txt'));