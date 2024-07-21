<?php
function randArray(int $length = 10, int $min = 1, int $max = 10): array
{
    $array = [];
    for ($i = 0; $i < $length; $i++) {
        $array[] = rand($min, $max);
    };
    return $array;
}

$myArray = randArray();
$intArray = count($myArray);
print_r($myArray);
$calculate = 1;
$count = 0;
$sum = 0;
foreach ($myArray as $number) {
    $calculate = $calculate * $number;
    $sum = $sum + $number;
    if ($number === 5) {
        $count = $count + 1;
    }
}

for ($i = 0; $i < $intArray; $i++) {
    if ($myArray[$i] % 3 !== 0) {
        continue;
    }else{
        echo $myArray[$i].PHP_EOL;
    }
}

echo $sum.PHP_EOL;
echo $count.PHP_EOL;
echo $calculate.PHP_EOL;
