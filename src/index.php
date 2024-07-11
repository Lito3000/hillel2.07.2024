<?php

//Написати програму на PHP, яка виводить на екран назву кольору в залежності від стану змінної $value
//
//Залежності значення змінної і кольору:
//
//- 1 - green
//
//- 2 - red
//
//- 3 - blue
//
//- 4 - brown
//
//- 5 - violet
//
//- 6 - black
//
//Всі інші значення мають виводити white
$status = 5;

if($status ===1){
    echo 'green'.PHP_EOL;
}else if ($status === 2){
    echo 'red'.PHP_EOL;
}else if ($status === 3){
    echo 'blue'.PHP_EOL;
}else if ($status === 4){
    echo 'brown'.PHP_EOL;
}else if ($status === 5){
    echo 'violet'.PHP_EOL;
}else if ($status === 6){
    echo 'black'.PHP_EOL;
}else{
    echo 'white'.PHP_EOL;
}


switch ($status) {
    case 1:
        echo 'green' . PHP_EOL;
        break;
    case 2:
        echo 'red' . PHP_EOL;
        break;
    case 3:
        echo 'blue' . PHP_EOL;
        break;
    case 4:
        echo 'brown' . PHP_EOL;
        break;
    case 5:
        echo 'violet' . PHP_EOL;
        break;
    case 6:
        echo 'black' . PHP_EOL;
        break;
    default:
        echo 'white' . PHP_EOL;
}

$result = match($status){
    1 => 'green' . PHP_EOL,
    2 => 'red' . PHP_EOL,
    3 => 'blue' . PHP_EOL,
    4 => 'brown' . PHP_EOL,
    5 => 'violet' . PHP_EOL,
    6 => 'black' . PHP_EOL,
    default => 'white' . PHP_EOL,
};
echo $result;