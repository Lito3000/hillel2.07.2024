<?php



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
function FactorialNum(int $num):int
{
    $i = 1;
    $sum = 1;
    while ($i <= $num) {
        $sum = $sum * $i;
        $i = $i + 1;
    }
    return $sum;
}

$result = FactorialNum(5);
echo $result.PHP_EOL;
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