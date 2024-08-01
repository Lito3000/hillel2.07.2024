<?php

require_once __DIR__ . '/ToDoList.php';

$task1 = ['Go to sweem'];
$task2 = ['Go to play footbol'];

//if (!empty($list)) {
//    $list->write($task1);
//}


$list = new ToDoList();


$list->arrtask = $task1;
//$list->task2 = 'jonj';
$list->arrtask = $task2;
print_r($list->arrtask);
//echo $list->task2.PHP_EOL;
var_dump($list);

//$this->task[$name] = $value;

//$arr = [];
//$arr[] = 45;
//$arr[]= 'hj';
//print_r($arr);
//
//$arr4 = ['task5'=>[0=>'go to sweem'],'task6'=>[0=>'go to play footbol']];
//print_r($arr4);