<?php
//function getUsers7(&$users7): void
//{
//    $users7 = [
//        ['id' => 1, 'name' => 'John Doe', 'email' => 'john@doe.com'],
//        ['id' => 2, 'name' => 'Martin', 'email' => 'martin@doe.com'],
//        ['id' => 3, 'name' => 'Roger', 'email' => 'roger@doe.com'],
//        ['id' => 4, 'name' => 'Kate', 'email' => 'kate@doe.com'],
//        ['id' => 5, 'name' => 'Dillan', 'email' => 'dillan@doe.com'],
//    ];
//    function cmp($a, $b): int
//    {
//        if ($a['email'] == $b['email']) {
//            return 0;
//        }
//        return ($a['email'] > $b['email']) ? -1 : 1;
//    }
//
//
//    usort($users7, "cmp");
//
//    foreach ($users7 as $key => $value) {
////        echo $value['email'].PHP_EOL;
//        echo "$key: " . $value["email"] . "\n";
//    }
//}
//
//getUsers7($users7);

//$users9 = [5,9,6,4,8,6,3,7,5,1,0,8,5,3,57,42,64,6,8];
//function getUsers7(&$users9): void
//{
//
//    function cmp($a, $b): int
//    {
//        if ($a == $b) {
//            return 0;
//        }
//        return ($a < $b) ? -1 : 1;
//    }
//
//
//    usort($users9, "cmp");
//
////    foreach ($users9 as $key => $value) {
//////        echo $value['email'].PHP_EOL;
////        echo "$key: " . $value["email"] . "\n";
////    }
//}
//
//getUsers7($users9);
//print_r($users9);

//$users10 = [5,9,6,4,8,6,3,7,5,1,0,8,5,3,57,42,64,6,8];
//$result7 = max($users10);
//
//echo ($result7).PHP_EOL;

function randArray(int $length = 10, int $min = 1, int $max = 10): array
{
    $array = [];
    for ($i = 0; $i < $length; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}

$myArray = randArray();
$intArray = count($myArray);
print_r($myArray);

//---------------------------------------------------------------------------------------------------------------------------------

function sortMax(array $a): int
{
    return max($a);
}
$resultMax = sortMax($myArray);
echo $resultMax.PHP_EOL;
//---------------------------------------------------------------------------------------------------------------------------------
function sortMin(array $a): int
{
    return min($a);
}
$resultMax = sortMin($myArray);
echo $resultMax.PHP_EOL;

//----------------------------------------------------------------------------------------------------------------------------------
//function numberSort(&$sort): void
//{
//    function cmp($a, $b): int
//    {
//        if ($a == $b) {
//            return 0;
//        }
//        return ($a < $b) ? -1 : 1;
//    }
//
//  usort($sort, "cmp");
//
//}
//
//numberSort($myArray);
//print_r($myArray);
//-----------------------------------------------------------------------------------------------------------------------------------

function numberSort($a): array
{
    function cmp($a, $b): int
    {
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }
    $a = [];

 return usort($a, "cmp");

}

$res = numberSort($myArray);
print_r($res);