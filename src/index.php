<?php
declare(strict_types=1);
$elem1= 8;
$elem2= 9;
function myCallBack(float$numberInt1,float $numberInt2, ?Closure $function1 = null):float
{

    if ($function1 !== null) {
        return $function1($numberInt1, $numberInt2);
    }
    return  $numberInt1 * $numberInt2;
}


$filterFunc = function (float $number1,float $number2):float{
    return $number1 * $number2;
};
echo myCallBack($elem1,$elem2,$filterFunc).PHP_EOL;
