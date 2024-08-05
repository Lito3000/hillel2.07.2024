<?php
require_once __DIR__ . '/Track_TraKer.php';


$file = new Track_TraKer('textFile.txt');
$task2 = ['Go to play footbol', 10];
$task1 = ['Go to play sweem', 4];

//$file->write($task1);

//$file->addTask($task1);
$file->delete('1');
//    $lines = $file->getLines();
//    print_r($lines);
//    echo $file->getLastLine();
//    $file->setPath('test222.txt');
//$sd = $file->tasks;
//print_r($sd);

