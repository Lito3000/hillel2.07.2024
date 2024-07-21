<?php


//var_dump(12<10);
function elem(int $a):void
{
    $i = 1;
    while ($i <= $a) {
        echo $i . "\n";
        $i++;
    }
}

elem(10);
//----------------------------------------------------------------------------------------------------------------------------
function FactorialNum(int $num):void
{
    $i = 1;
    $sum = 1;
    while ($i <= $num) {
        $sum = $sum * $i;
        echo $sum.PHP_EOL;
        $i = $i + 1;
    }
}

FactorialNum(5);
//-----------------------------------------------------------------------------------------------------------------------------


function numberDoubles(int $a):void
{
    $i = 1;
    while ($i <= $a) {
        if ($i % 2 === 0) {
            echo $i."\n";
        }
        $i++;
    }
}
numberDoubles(20);