<?php
echo 'How are your name?'.PHP_EOL;;
$r = fgets(STDIN);
echo "Welcome to my city ".trim($r).'!'.PHP_EOL;
echo "How did you get there? ".trim($r).PHP_EOL;
//------------------------------------------------------------------------------------------------------------
echo "type number 1:";
$number1 = fgets(STDIN);
echo "type number 2:";
$number2 = fgets(STDIN);
echo "type number 3:";
$number3 = fgets(STDIN);
$average  = ($number1 + $number2 + $number3) / 3 ;
echo $average.PHP_EOL;