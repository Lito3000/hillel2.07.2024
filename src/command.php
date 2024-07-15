<?php
declare(strict_types=1);

//------------------------------------------------------------------------------------------------------------------------------
function square(float $a):float
{
return pi() *  pow($a,2);
}
echo square(8).PHP_EOL;

//------------------------------------------------------------------------------------------------------------------------------
$number = 9;
function degree1(float $b):float
{
 return   pow($b,2);
}

$result = degree1($number);
echo $result.PHP_EOL;

//------------------------------------------------------------------------------------------------------------------------------
function degree2(float &$b):void
{
    $b = pow($b,2);
}
echo $number.PHP_EOL;
degree2($number);
echo $number.PHP_EOL;