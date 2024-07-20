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
    ['id' => 1, 'title' => 'carPlant', 'salary' => '100000', 'locationId' => 1, 'sectorId' => 2,'airbus'=>'engine'],
    ['id' => 2, 'title' => 'boatPlant', 'salary' => '40000', 'locationId' => 2, 'sectorId' => 1],
    ['id' => 3, 'title' => 'aircraftPlant', 'salary' => '200000', 'locationId' => 4, 'sectorId' => 2],
    ['id' => 4, 'title' => 'aircraft', 'salary' => '20070', 'locationId' => 4, 'sectorId' => 2],
];
$sectors = [
    ['id' => 1, 'name' => 'finance'],
    ['id' => 2, 'name' => 'plant']
];
$locations = [
    ['id' => 1, 'name' => 'London'],
    ['id' => 2, 'name' => 'Lviv'],
    ['id' => 3, 'name' => 'Kiev'],
    ['id' => 4, 'name' => 'Odessa '],
];

foreach ($vacancies as $key => $vacancy) {
    foreach ($locations as $location) {
        if ($vacancy['locationId'] === $location['id']) {
            $vacancies[$key]['location'] = $location;//взять $vacancies[$key] === [0] индекс в $vacancies и в этом [0] индексе создать
            // ключ ['location']  и вставить в него $location тоесть ['id' => 1, 'name' => 'London']
            unset($vacancies[$key]['locationId']);//удаляем 'locationId' => 1 , $vacancies[$key]['locationId'] === 'locationId' => 1
            break;//если нашел $vacancy['locationId'] === $location['id'] то break и переход к нижнему циклу
        }
    };
    foreach ($sectors as $sector) {
        if ($vacancy['sectorId'] === $sector['id']) {
            $vacancies[$key]['sector'] = $sector;
            unset($vacancies[$key]['sectorId']);
            continue 2;//2 означает что будут пропускатся $vacancy в foreach ($vacancies as $key => $vacancy) {}
            //continue 1 это значит что будут пропускатся $sector  в  foreach ($sectors as $sector) {}
        }
    };
};
print_r($vacancies);


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