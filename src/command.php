<?php

//--------------------------------------------------------------------------------------------------------------------------
declare(strict_types=1);


//------------------------------------------------------------------------------------------------------------------------------
$radius = 9;
$pow = 2;
function square(float $radius,float $degree):float
{
return pi() *  pow($radius,$degree);
}
echo square($radius,$pow).PHP_EOL;

//------------------------------------------------------------------------------------------------------------------------------

function degree1(float $radius,float $degree):float
{
 return   pow($radius,$degree);
}

$result = degree1($radius,$pow);
echo $result.PHP_EOL;

//------------------------------------------------------------------------------------------------------------------------------
$result = 0;
function degree2(float &$b,float $radius,float $degree):void
{
    $b = pow($radius,$degree);
}
echo $result.PHP_EOL;
degree2($result,$radius,$pow);
echo $result.PHP_EOL;