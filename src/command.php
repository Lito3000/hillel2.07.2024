<?php

//$arr = [3,7,6];
//for ($i = 0; $i < count($arr); $i++) {
//    echo $arr[$i] . "\n";
//}
//echo "Hello command.php\n";
//$varible = "Hi\n";
//echo "hello $varible";
//var_dump($varible);
//echo 'hello2' . $varible;
//PHP_INT_MAX;
////echo PHP_INT_MAX;
//$js = isset($varible);
//var_dump($js);
//unset($js);
//var_dump($js);
//$integ = '4';
//$integ = (int)'4';
//var_dump($integ);
//$num2 = intval('4');
//var_dump($num2);
//$a = 5;
//$a = $a +7;
//$b = $a;
//$a = $a + 1;
//
////echo "$a\n";
//echo $a . "\n";
//echo $b . PHP_EOL;
//
//$text = 'red';
//$text .= 'blue';
//$text = $text . 'blue';
//echo $text . PHP_EOL;
//$r = fgets(STDIN);
//echo $r;
//echo $r;
//$numr = 5;
//$num57 = strval($numr);
//echo $num57;
//is_numeric($numr);
//
//$gf = 34;

//function f7(k){
//    $gf = k;
//}
//f7(7);
//--------------------------------------------------------------------------------------------------------------------------
//function sum($number1,$number2)
//{
//if (!is_numeric($number1) || !is_numeric($number2)) {
//    return false;
//}
//return $number1 + $number2;
//}
//$number1 = 55;
//$number2 = 67;
//$result = sum($number1,$number2);
//
////$w =is_numeric($number2);
////echo $w;//возращает 1 если true  возращает 0 если false
//if($result === false){
//    echo "sum failed\n";
//}else{
//    echo $result.PHP_EOL;
//}
//----------------------------------------------------------------------------------------------------------------------------
//var_dump(true || true); //
//                             true || false === true
//                             true || true === true
//                             false || false === false
//если будет один true вернет true в остальных случаях вернет false
//var_dump(!is_numeric(8));
//var_dump(!is_numeric(8));

//var_dump(false && false);
//                             true && false === false
//                             true && true === true
//                             false && false === false
//--------------------------------------------------------------------------------------------------------------------------
declare(strict_types=1);
//function typeSum(int|float $number1,int|float $number2):int|float|bool
//{
//if (!is_numeric($number1) || !is_numeric($number2)) {
//    return false;
//}
//return $number1 + $number2;
//}
//$number1 = '75';
//$number2 = 67;
//$result = typeSum($number1,$number2);
//
////$w =is_numeric($number2);
////echo $w;//возращает 1 если true  возращает 0 если false
//if($result === false){
//    echo "sum failed\n";
//}else{
//    echo $result.PHP_EOL;
//}
//----------------------------------------------------------------------------------------------------------------------------

//function test3():void
//{
//    echo 'voidFunction';
//}
//-----------------------------------------------------------------------------------------------------------------------------
//$swith = false;
//function test1(bool $swith):never
//{
//if ($swith === false) {
//    echo 'swithTest';
//}
//    exit;
//
//}
//test1($swith);
//
//echo 1;
//---------------------------------------------------------------------------------------------------------------------------------
//function callBackFunction($k)
//{
//  echo trim($k).PHP_EOL;
//}
//function apiFetch($y):void
//{
//callBackFunction($y);
//}
//apiFetch('  ipop   ');
//--------------------------------------------------------------------------------------------------------------------------------
//function sertch(?string $location = null, $sector = null, $salaryMin = null, $salaryMax = null)
//{
//
//}
//---------------------------------------------------------------------------------------------------------------------------------
//$num = 5;
//function myLink(int &$numAppgraide):void
//{
//    $numAppgraide = $numAppgraide+1;
////    return $numAppgraide;
//};
//
//
//
//$result = myLink($num);
//echo $result.PHP_EOL;
//echo $num.PHP_EOL;
//----------------------------------------------------------------------------------------------------------------------------------
//$function1 = function (int $a, int $b): int {
//    return $a + $b;
//};
//var_dump($function1);
//echo $function1(5, 6) . PHP_EOL;
//---------------------------------------------------------------------------------------------------------------------------------
function myFilter(string $string, ?Closure $function1 = null)
{
    if ($function1 !== null) {
        return $function1($string);
    }
    return  $string;
}
$text = " Uncaught ArgumentCountError: Too few arguments to function myFilter()";
$filterFunc = function (string $string):string{
    return str_replace('o','*',$string);
};
echo myFilter($text,$filterFunc).PHP_EOL;
echo myFilter($text,function (string $string):string{
        return str_replace(' ','',$string);
    }).PHP_EOL;
//-----------------------------------------------------------------------------------------------------------------------------
//function myFilter1(string $string, ?callable $function1 = null)
//{
//    if ($function1 !== null) {
//        return $function1($string);
//    }
//    return  $string;
//}
//$text = "                                  Uncaught ArgumentCountError: Too few arguments to function myFilter()";
//
//echo myFilter1($text,'trim').PHP_EOL;
//------------------------------------------------------------------------------------------------------------------------------

//
//$function1 =  fn (float $number, int $pow = 2)=>pow($number, $pow);
//echo $function1(5).PHP_EOL;

//------------------------------------------------------------------------------------------------------------------------------
//function square(float $a):float
//{
//return pi() *  pow($a,2);
//}
//echo square(8).PHP_EOL;
//
////------------------------------------------------------------------------------------------------------------------------------
//$number = 9;
//function degree1(float $b):float
//{
// return   pow($b,2);
//}
//
//$result = degree1($number);
//echo $result.PHP_EOL;
//
////------------------------------------------------------------------------------------------------------------------------------
//function degree2(float &$b):void
//{
//    $b = pow($b,2);
//}
//echo $number.PHP_EOL;
//degree2($number);
//echo $number.PHP_EOL;