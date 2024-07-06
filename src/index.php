<?php

$x = 'u';
$y = 55;

$result = ($y and $x);
var_dump($result);

$x = true;
$y = 5;
$result2 = ($x or $y);
var_dump($result2);

$number1 = "45";
$string_to_numb = (int)$number1;
var_dump($string_to_numb);

$string1 = 56;
$number_to_string = (string)$string1;
var_dump($number_to_string);

$float1 = '0.23456789';
$string_to_float = (float)$float1;
var_dump($string_to_float);

$float2 = 1.23456789;
$float_to_string = (string)$float2;
var_dump($float_to_string);

$boolean1 = '';
$string_in_boolean = (bool)$boolean1;
var_dump($string_in_boolean);

$boolean2 = array();
$arr_in_boolean = (bool)$boolean2;
var_dump($arr_in_boolean);

$boolean3 = array(56);
$arr_in_boolean = (bool)$boolean3;
var_dump($arr_in_boolean);

$null_to_null = null;
var_dump($null_to_null);

$sum1 = 7;
$sum2 = 12;
$sum3 = 5;

$result3 = ($sum2 > $sum1) && ($sum2 > $sum3);
var_dump($result3);

$sum4 = 'text';
$sum5= 6;
$sum6 = "56";

$result4 = ($sum4 || $sum1) !== ($sum4 Xor $sum5);
var_dump($result4);

$sum7 = '56';
$sum8 = 12;
$sum9 = "56";
$result5 = (($sum8 || (int)$sum9) or ((int)$sum7 || $sum9) !== ((int)$sum7 Xor $sum8));
var_dump($result5);

$str1 = "62";
$str2 = "+62";

var_dump($str1 == $str2); // bool(true)
var_dump($str1 === $str2); // bool(false)


$elem1 = 30;
$elem2 = '12';
if ($elem1 == $elem2) {
    echo 'true'.PHP_EOL;
}else{
    echo 'false'.PHP_EOL;
}


$elem3 = 'text';
$elem4 = '+12';
$elem5 = +62;
$elem6 = '+62';
$elem7 = true;
$elem8 = 89;
if (($elem7 == (string)$elem8) and ((int)$elem6 || $elem4) !== ($elem5 Xor (int)$elem3)){
    echo 'true'.PHP_EOL;
}else{
    echo 'false'.PHP_EOL;
}