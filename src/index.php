<?php

class ClosureService
{
    public function conStruct()
    {
        $factorial = function ($n) use (&$factorial) {
//            global $factorial;
            if ($n === 1) {
                return 1;
            }
            return $factorial($n - 1) * $n;
        };
        return $factorial;
    }
}

$clouser = new ClosureService();
$factorial = $clouser->conStruct();
echo $factorial(5);