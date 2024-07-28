<?php
function fibo($i) {
    if ($i == 0 ) return 0;
    if ($i == 1 || $i == 2) {
        return 1;
    } else {
        return fibo($i - 1) + fibo($i -2);
    }
}
$res = fibo(30);
echo $res;