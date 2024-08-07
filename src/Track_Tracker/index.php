<?php
require_once __DIR__ . '/Track_TraKer.php';
require_once __DIR__ . '/FileType.php';

$file = new TrackTraKer('textFile.txt');
$task2 = ['Go to play footbol', 10];
$task1 = ['Go to play sweem', 4];

//$file->write($task1);

try {
//    $file->addTask($task2);
    $file->delete('66b390c5ae6e8');
//    $file->getTasks();
//    $file->completeTask("66b390c5ae6e8");
} catch (Exception $e) {
}
//try {
////    $file->delete('1');
//} catch (Exception $e) {
//}
//    $lines = $file->getLines();
//    print_r($lines);
//    echo $file->getLastLine();
//    $file->setPath('test222.txt');
//$sd = $file->tasks;
//print_r($sd);

