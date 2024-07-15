<?php

//--------------------------------------------------------------------------------------------------------------------------
declare(strict_types=1);


//------------------------------------------------------------------------------------------------------------------------------
$number = 9;
$pow = 2;
function square(float $number,float $degree):float
{
return pi() *  pow($number,$degree);
}
echo square($number,$pow).PHP_EOL;

//------------------------------------------------------------------------------------------------------------------------------

function degree1(float $number,float $degree):float
{
 return   pow($number,$degree);
}

$result = degree1($number,$pow);
echo $result.PHP_EOL;

//------------------------------------------------------------------------------------------------------------------------------

function degree2(float &$number,float $degree):void
{
    $number = pow($number,$degree);
}
echo $number.PHP_EOL;
degree2($number,$pow);
echo $number.PHP_EOL;