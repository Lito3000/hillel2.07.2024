<?php
//$arr = ['key1' => 'value1', 'key2' => 'value2', 'key3' => 'value3'];
//$arrValurs = array_values($arr);//индексированный массив значений
//$arrKeys = array_keys($arr);//массив всех ключей во входных данных.
//print_r($arrValurs);
//print_r($arrKeys);
//
//$keys = ['key1', 'key2', 'key3', 'key4'];
//$values = ['value1', 'value2', 'value3'];
//if (count($keys) === count($values)) {
//    $result = array_combine($keys, $values);//объединенный массив
//    print_r($result);
//} else {
//    echo 'Errjlk' . PHP_EOL;
//}
//$arr2 = [4, 7, 98, 45, 6, 'test',0, 2];
//function sumCalcProduct(array $arr2): array
//{
//    if ([] === $arr2) {
//        return $arr2;
//    }
//    foreach ($arr2 as $key => $value) {
//        if(!is_numeric($value)){
//            unset($arr2[$key]);
//        }
//    }
//    print_r($arr2);
//    $arrFilter2 = array_filter($arr2, fn($value) => $value !== 0);
////    print_r($arrFilter2);
////    $arrFilter = array_filter($arr2, fn($value) => $value === 4);
//    $sum = array_sum($arr2);
//    $product = array_product($arrFilter2);
////    print_r($product);
//    return [$sum, $product];
//
//}
//
//[$arrSum, $arrProduct] = sumCalcProduct($arr2);
//
////$arrSum = $resultSum[0];
////$arrProduct = $resultSum[1];
////print_r($arrSum);
////print_r($arrProduct);
////print_r($arrSum);
////echo $arrSum . PHP_EOL;
//echo $arrProduct . PHP_EOL;
////print_r($arrFilter);

//---------------------------------------------------------------------------------------------------------------------------------
//$arrExtract = ['key5'=>'value5','key6'=>'value6','key7'=>'value7','key8'=>['value8'=>'567']];
//extract($arrExtract);
//echo $key5.PHP_EOL;
//echo $key6.PHP_EOL;
//echo $key7.PHP_EOL;
//print_r($key8);
//---------------------------------------------------------------------------------------------------------------------------------
//$name = 'John Doe';
//$email = 'johndoe@example.com';
//$city = 'New York';
//$message = 'Hello, ' . $name . '!';
//
//$user = compact('name', 'email', 'city', 'message');
//print_r($user);
//-----------------------------------------------------------------------------------------------------------------------------------
//$array = [1, 2, 3,7,4,9,1,3,7,65,6,78];
//$result2=array_unique($array);
//print_r($result2);
//-----------------------------------------------------------------------------------------------------------------------------------

//$array5 =[6,8,3];
//$array6 =[1,2,3];
//$array7 =['test1'=>'65',4,5,6];
//$result4=array_merge($array6,$array5,$array7);

//-----------------------------------------------------------------------------------------------------------------------------------
//array_unshift($result4,'unshift');
//array_push($result4,'push');
////$result4[] = 'push';
//print_r($result4);
//-----------------------------------------------------------------------------------------------------------------------------------
//$users = [
//    ['id'=>1, 'name'=>'John Doe', 'email'=>'john@doe.com'],
//    ['id'=>2, 'name'=>'Martin', 'email'=>'martin@doe.com'],
//    ['id'=>3, 'name'=>'Roger', 'email'=>'roger@doe.com'],
//    ['id'=>4, 'name'=>'Kate', 'email'=>'kate@doe.com'],
//    ['id'=>5, 'name'=>'Dillan', 'email'=>'dillan@doe.com'],
//];

//$names=[];
//foreach ($users as $user) {
//    $names[] = $user['name'];
//}
//echo implode(', ', $names);
//print_r($names);

//$names=array_column($users, 'name');
//echo implode(', ', $names);

//-----------------------------------------------------------------------------------------------------------------------------
//$numb7= [6,8,9,6,3];
//
//$result8 =array_map(function ($value){
//    return $value * 2;
//},$numb7);
//print_r($result8);

//----------------------------------------------------------------------------------------------------------------------------------
//$numb9= [62,8,6,65,3,8,1,2];
//array_walk($numb9,function(&$value,$key){
//    $value*=2;
//});
//
//print_r($numb9);
//---------------------------------------------------------------------------------------------------------------------------------
//$numb9[]=55;
//foreach ($numb9 as &$value){
//    $value*=2;
//}
//print_r($numb9);
//----------------------------------------------------------------------------------------------------------------------------------
//$numb11= [62,8,6,65,3,8,1,2];
//
//function myWalk(array &$array ,callable $callback):void
//{
//$myArray = $array;
//foreach ($myArray as &$value){
//    $callback($value);
//}
//$array= $myArray ;
//}
//
//myWalk($numb11,function(&$value){
//
//    $value = $value * 2;
//});
//print_r($numb11);

//----------------------------------------------------------------------------------------------------------------------------------
//$numb10= [62,8,6,65,3,8,1,2];
//
//function myWalk2(array &$array ,callable $callback):void
//
//{
//
//    foreach ($array as &$value){//value изменяет myArray
//        $callback($value);
//    }
//
//}
//
//myWalk2($numb10,function(&$value){
//    $value = $value * 2;
//});
//print_r($numb10);
//--------------------------------------------------------------------------------------------------------------------------------

//$array1 = ['test1'=>8,'test2'=>6,'test3'=>5,'test4'=>4,'test5'=>3,'test6'=>2,'test7'=>6,'test8'=>1];
//sort($array1);
//krsort($array1);
//print_r($array1);
//---------------------------------------------------------------------------------------------------------------------------------

//function cmp($a, $b): int
//{
//    if ($a == $b) {
//        return 0;
//    }
//    return ($a > $b) ? -1 : 1;
//}
//
//$array3 = ['test1'=>8,'test2'=>6,'test3'=>5,'test4'=>4,'test5'=>3,'test6'=>2,'test7'=>6,'test8'=>1];
//
//usort($array3, "cmp");
//
//foreach ($array3 as $key => $value) {
//    echo "$key: $value\n";
//}
//-----------------------------------------------------------------------------------------------------------------------------------
/**
 * @param $users7
 * @return void
 */
function getUsers7(&$users7): void
{
    $users7 = [
        ['id' => 1, 'name' => 'John Doe', 'email' => 'john@doe.com'],
        ['id' => 2, 'name' => 'Martin', 'email' => 'martin@doe.com'],
        ['id' => 3, 'name' => 'Roger', 'email' => 'roger@doe.com'],
        ['id' => 4, 'name' => 'Kate', 'email' => 'kate@doe.com'],
        ['id' => 5, 'name' => 'Dillan', 'email' => 'dillan@doe.com'],
    ];
    function cmp($a, $b): int
    {
        if ($a['email'] == $b['email']) {
            return 0;
        }
        return ($a['email'] > $b['email']) ? -1 : 1;
    }


    usort($users7, "cmp");

    foreach ($users7 as $key => $value) {
//        echo $value['email'];
        echo "$key:" .  $value['email']."\n";
//             echo "$key: " . $value["email"] . "\n";
    }
}

getUsers7($users7);
//--------------------------------------------------------------------------------------------------------------------------------
$users5 = [
    ['id'=>1, 'name'=>'John Doe', 'email'=>'john@doe.com'],
    ['id'=>2, 'name'=>'Martin', 'email'=>'martin@doe.com'],
    ['id'=>3, 'name'=>'Roger', 'email'=>'roger@doe.com'],
    ['id'=>4, 'name'=>'Kate', 'email'=>'kate@doe.com'],
    ['id'=>5, 'name'=>'Dillan', 'email'=>'dillan@doe.com'],
];
//function cmp($a, $b): int
//{
//    if ($a['email'] == $b['email']) {
//
//        return 0;
//    }
//    echo $a['email'].PHP_EOL;
//    return ($a['email'] > $b['email']) ? -1 : 1;
//}
//
//
//usort($users5, "cmp");

//function sortMap(array $a): array
//{
//    return array_map(function($value){
//        return $value *2;
//    },$a);
//}
//$resultNumber = sortMap($myArray);
//print_r($resultNumber);