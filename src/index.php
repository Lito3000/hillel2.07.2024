<?php
function fibanachi($number):Generator
{
    $cur = 1;
    $prev = 0;
    for ($i = 0; $i < $number; $i++) {
        yield $cur;

        $temp = $cur;
        $cur = $prev + $cur;
        $prev = $temp;
    }
}

foreach (fibanachi(9) as $key => $fib) {
    echo $key . ' => ' . $fib . "\n";
}