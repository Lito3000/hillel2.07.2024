<?php
declare(strict_types=1);
$elem1 = 8;
$elem2 = 9;
function myCallBack(int $numberInt1, int $numberInt2, ?Closure $function1 = null): int
{

    if ($function1 !== null) {
        $result2 = $numberInt1 * $numberInt2;
      $function1($result2);
    }
    return $numberInt1 * $numberInt2;
}


$filterFunc = function (int $number1):void {
    echo $number1.PHP_EOL;
};
myCallBack($elem1, $elem2, $filterFunc);
