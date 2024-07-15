<?php
declare(strict_types=1);
$elem1 = 8;
$elem2 = 9;
function myCallBack(int $numberInt1, int $numberInt2, ?Closure $function1 = null): int
{

    if ($function1 !== null) {
        $function1($numberInt1, $numberInt2);
    }
    return $numberInt1 * $numberInt2;
}


$filterFunc = function (int $number1, int $number2): void {
    echo ($number1 * $number2) . PHP_EOL;

};
echo myCallBack($elem1, $elem2,$filterFunc).PHP_EOL;
