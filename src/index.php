<?php


//class ClosureService
//{
//    public function conStruct()
//    {
//        $factorial = function ($n) use (&$factorial) {
////            global $factorial;
//            if ($n === 1) {
//                return 1;
//            }
//            return $factorial($n - 1) * $n;
//        };
//        return $factorial;
//    }
//}
//
//$clouser = new ClosureService();
//$factorial = $clouser->conStruct();
////var_dump($factorial);
//echo $factorial(5);
//$array1= [1,2,3,4,5,6,7,8,8,10];
//foreach ($array1 as $key=>$item ) {
//    if ($item === 8) {
//        echo $key;
//    }
//}
//--------------------------------------------------------------------------------------------------------------------------

//$array1= [1,2,3,4,5,6,7,8,8,10];
//foreach ($array1 as $key=>$item ) {
////    $array1[1]=5;
//    if ($array1[$key] === 8) {
//        echo $item;
//    }
//}
//print_r($array1);
//--------------------------------------------------------------------------------------------------------------------------
//$array1= [1,2,3,4,5,6,7,8,8,10];
//foreach ($array1 as $key=>$item ) {
////    $array1[1]=5;
//    if ($array1[$key] === 8) {
//        echo $item;
//    }
//}
//---------------------------------------------------------------------------------------------------------------------------
//$array1= [1,2,3,46,5,6,7,8,8,10];
//foreach ($array1 as $key=>$item ) {
////    $array1[1]=5;
//    if ($key === 3) {
//        echo $item;
//    }
//}
//------------------------------------------------------------------------------------------------------------------------------
//$users = [
//    ['name'=> 'John Doe', 'email'=> 'john@doe.com'],
//    ['name'=>'Kate', 'email'=> 'kate@doe.com']
//];
//foreach ($users as $kay =>&$user){
//    $user['city']='trty';
//}
//print_r($users);
//---------------------------------------------------------------------------------------------------------------------------
//$users = [
//    ['name'=> 'John Doe', 'email'=> 'john@doe.com'],
//    ['name'=>'Kate', 'email'=> 'kate@doe.com']
//];
//foreach ($users as $kay =>$user){
//    $users[$kay]['city'] = 'Odessa';
//}
//print_r($users);
//---------------------------------------------------------------------------------------------------------------------------
//$users = [
//    ['name' => 'John Doe', 'email' => 'john@doe.com'],
//    ['name' => 'Kate', 'email' => 'kate@doe.com'],
//    ['name' => 'John Doe', 'email' => 'jane@doe.com'],
//    ['name' => 'Daniel', 'email' => 'daniel@doe.com']
//];
//foreach ($users as $key => $user) {
//    if ($user['name'] === 'Daniel') {
//        $users[$key]['City'] = 'Odessa';
//    } elseif ($user['name'] === 'John Doe') {
//        $users[$key]['City'] = 'Lviv';
//    }
//}
//print_r($users);
//-----------------------------------------------------------------------------------------------------------------------------
$vacancies = [
    ['id' => 6, 'title' => 'ship', 'salary' => '90070', 'locationId' => 4, 'sectorId' => 3, 'continue' => 'nextContynue', 'gtr' => 'mix'],
    ['id' => 1, 'title' => 'carPlant', 'salary' => '100000', 'locationId' => 1, 'sectorId' => 2, 'airbus' => 'engine'],
    ['id' => 2, 'title' => 'boatPlant', 'salary' => '40000', 'locationId' => 2, 'sectorId' => 1],
    ['id' => 3, 'title' => 'aircraftPlant', 'salary' => '200000', 'locationId' => 4, 'sectorId' => 2],
    ['id' => 4, 'title' => 'aircraft', 'salary' => '20070', 'locationId' => 2, 'sectorId' => 2],
    ['id' => 5, 'title' => 'train', 'salary' => '90070', 'locationId' => 4, 'sectorId' => 3],

];
$sectors = [
    ['id' => 1, 'name' => 'finance'],
    ['id' => 2, 'name' => 'plant'],
    ['id' => 3, 'name' => 'micro']
];
//$locations = [
//    ['id' => 1, 'name' => 'London'],
//    ['id' => 2, 'name' => 'Lviv'],
//    ['id' => 3, 'name' => 'Kiev'],
//    ['id' => 4, 'name' => 'Odessa '],
//];
//foreach ($vacancies as $key => $vacancy) {
//    if ($vacancy['id'] === 1) {
//        continue;
//    }
//    var_dump($vacancy);
//}
//foreach ($vacancies as $key => $vacancy) {
//
////    foreach ($locations as $location) {
////        if ($vacancy['locationId'] === $location['id']) {//когда в переборе массива foreach ($locations as $location) {}
////            //$vacancy['locationId'] совпадает id  $location['id'] то действие переходит в тело if  и в конце останавлявает цыкл
////            // foreach на одинаковых id c помощью break
////            $vacancies[$key]['location'] = $location;//взять $vacancies[$key] === [0] индекс в $vacancies и в этом [0] индексе создать
////            // ключ ['location']  и вставить в него $location тоесть ['id' => 1, 'name' => 'London']
////            unset($vacancies[$key]['locationId']);//удаляем 'locationId' => 1 , $vacancies[$key]['locationId'] === 'locationId' => 1
////            break;//если нашел $vacancy['locationId'] === $location['id'] то break и переход к нижнему циклу
////        }
////    };
//
//    foreach ($sectors as $sector) {
//        if ($vacancy['sectorId'] === $sector['id']) {
//            $vacancies[$key]['sector'] = $sector;
//            unset($vacancies[$key]['sectorId']);
//            continue 2;
//        }
//
//    };
//    print_r($vacancy);
//};
//1:54
//print_r($vacancies);
//---------------------------------------------------------------------------------------------------------------------------------
foreach ($vacancies as $key => $vacancy) {//на каждую итерацию вакансии будет
//    echo $vacancy['gtr'] . ' - ' . $vacancy['continue'] . '<br>';

//    print_r( $vacancies);
//            print_r( $vacancy);
//            print_r( $sectors);
//            print_r( $sector);
    foreach ($sectors as $sector) {//мы перебираем вакансии заходим на первую вакансию,перебираем сектора на каждой вакансии,
        //тоесть на каждую итерацию вакансии будет две итерации секторов
        //после того как мы нашли нам не нужно перебирать сектора и вакансии нам нужно идти на следующую вакнсию
        if ($vacancy['sectorId'] === $sector['id']) {
            $vacancies[$key]['sector'] = $sector;
            unset($vacancies[$key]['sectorId']);//мы изменили этот массив и сказали пропустить все ключи
            // не перебирать следующие ключи после слова $vacancy['sectorId'] в этом массиве и перейти к следующей итерации
//нам треба наступна вакансия и в ней перебирать сектора
            //он дальше их перебирать не будет а сами свойства масива он выведет и изменит те что нужно изменить и спустится
            // к следующей итерации ..после нахождения сектора переходим на следующую локацию
//            print_r( $vacancies);
//            print_r( $vacancy);
//            print_r( $sectors);
//            print_r( $sector);
//            var_dump($vacancy);
//            var_dump($vacancies);
//            var_dump($sector);
//            var_dump($sectors);
            continue 2;
//            echo $vacancies.PHP_EOL;
//            echo $vacancy.PHP_EOL;
//            echo $sectors.PHP_EOL;
//            echo $sector.PHP_EOL;


        }
//        var_dump($vacancy);
//            var_dump($vacancies[$key]);
//            var_dump($sector);
//            var_dump($sectors);
//        if ($value === '40000') {
////            echo $value.PHP_EOL;

//        }
//после нахождения локации будут игнорироватся сектора потому что там стоит континью .цикл будет переходить к следующему индексу
        echo $vacancies[$key]['id'], ' - ', $vacancies[$key]['title'], '  - ', $vacancies[$key]['salary'], ' - ', $vacancies[$key]['locationId'], '-', $vacancies[$key]['sectorId'], ' - ', $vacancies[$key]['continue'], '-', $vacancies[$key]['gtr'] . PHP_EOL;
//        echo  1 .PHP_EOL;
//        echo 1;
    }
//    var_dump($vacancy);
//            var_dump($vacancies[$key]);
//            var_dump($sector);
//            var_dump($sectors);
//    print_r( $vacancies);
//            print_r( $vacancy);
//            print_r( $sectors);
//            print_r( $sector);
//    print_r($vacancies);
//    var_dump($vacancy);

}

//*********************************************************************************************************************************
//print_r($vacancies);
//
//$arr2 = ['uuy','ghh','44'];
//$string = implode(',', $arr2);
//print_r($arr2);
//echo $string;
//*********************************************************************************************************************************
//---------------------------------------------------------------------------------------------------------------------------------
//print_r($vacancies);
//$add = ['id' => 1, 'title' => 'carPlant', 'salary' => '100000', 'location' => ['id' => 1, 'name' => 'London'], 'sector' => ['id' => 2, 'name' => 'plant']];
//print_r($add);
//-----------------------------------------------------------------------------------------------------------------------------
//$vacancies = [
//    ['id'=>1,'title'=>'carPlant' ,'salary'=>'100000','lacationId'=>1,'sectorId'=>2],
//    ['id'=>2,'title'=>'boatPlant' ,'salary'=>'40000','lacationId'=>2,'sectorId'=>1],
//    ['id'=>3,'title'=>'aircraftPlant' ,'salary'=>'200000','lacationId'=>4,'sectorId'=>2],
//];
//$sectors = [
//    ['id'=>1,'name'=>'finance'],
//    ['id'=>2,'name'=>'plant']
//];
//$locations =[
//    ['id'=>1,'name'=>'London'],
//    ['id'=>2,'name'=>'Lviv'],
//    ['id'=>3,'name'=>'Kiev'],
//    ['id'=>4,'name'=>'Odessa '],
//];
//
//foreach ($vacancies as $vacancy) {
//    foreach ($sectors as $sector) {
//        if ($vacancy['sectorId'] === $sector['id']) {
//$vacancies[$vacancy['id']]['sector'] = $sector['name'];
//        }
//    };
//};
//print_r($vacancies);
//--------------------------------------------------------------------------------------------------------------------------
//$vacancies = [
//    ['id'=>1,'title'=>'carPlant' ,'salary'=>'100000','lacationId'=>1,'sectorId'=>2],
//    ['id'=>2,'title'=>'boatPlant' ,'salary'=>'40000','lacationId'=>2,'sectorId'=>1],
//    ['id'=>3,'title'=>'aircraftPlant' ,'salary'=>'200000','lacationId'=>4,'sectorId'=>2],
//];
//$sectors = [
//    ['id'=>1,'name'=>'finance'],
//    ['id'=>2,'name'=>'plant']
//];
//$locations =[
//    ['id'=>1,'name'=>'London'],
//    ['id'=>2,'name'=>'Lviv'],
//    ['id'=>3,'name'=>'Kiev'],
//    ['id'=>4,'name'=>'Odessa '],
//];
//
//foreach ($vacancies as $vacancy) {
//    foreach ($sectors as $sector) {
//        if ($vacancy['sectorId'] === $sector['id']) {
//            $vacancies['sector'] = $sector;
//        }
//    };
//};
//print_r($vacancies);


//function FactorialNum($num)
//{
//    $i = 1;
//    $sum = 1;
//    while ($i <= $num) {
//        $sum = $sum * $i;
//        echo $sum.PHP_EOL;
//        $i = $i + 1;
//    }
//}
//
//FactorialNum(5);