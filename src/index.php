<?php
declare(strict_types=1);
$elem1 = 8;
$elem2 = 9;
function myCallBack(int $numberInt1, int $numberInt2, ?Closure $function1 = null): int
{
    $result = $numberInt1 * $numberInt2;
    if ($function1 !== null) {
      $function1($result);
    }
    return $result;
}


$filterFunc = function (int $number1):void {
    echo $number1.PHP_EOL;
};
echo myCallBack($elem1, $elem2);
