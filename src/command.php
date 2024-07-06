<?php

//$arr = [3,7,6];
//for ($i = 0; $i < count($arr); $i++) {
//    echo $arr[$i] . "\n";
//}
echo "Hello command.php\n";
$varible = "Hi\n";
echo "hello $varible";
var_dump($varible);
echo 'hello2' . $varible;
PHP_INT_MAX;
//echo PHP_INT_MAX;
$js = isset($varible);
var_dump($js);
unset($js);
var_dump($js);
$integ = '4';
$integ = (int)'4';
var_dump($integ);
$num2 = intval('4');
var_dump($num2);
$a = 5;
$a = $a +7;
$b = $a;
$a = $a + 1;

//echo "$a\n";
echo $a . "\n";
echo $b . PHP_EOL;

$text = 'red';
//$text .= 'blue';
//$text = $text . 'blue';
//echo $text . PHP_EOL;
//$r = fgets(STDIN);
//echo $r;
//echo $r;
$r = true;
echo $text && $r;
var_dump($text === $r);