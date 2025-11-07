<?php 
// Birinchi usul

$sonlar = array(1,23,75,13,278);
// Ikkinchi sonlar

$sonlar1 = [1,34,345,334,233];
print_r($sonlar);
echo $sonlar[2];
$cars = array("Volvo","Bmw","Mers");
var_dump($cars);
// Massiv ichidagi qiymatni o'zgARTIRISH

echo $sonlar1[5];
echo "\n";
$sonlar1[5] = 100;
echo $sonlar1[5];
print_r($sonlar1);

// add value 
$cars = array("Volva","BMW","Tayota");
foreach($cars as $x) {
    echo "$x ";
}
array_push($cars, "Chevrolet");
$cars[] = "BYD";
print_r($cars);
//werty
$user = ["ism" =>"Ramazon","Familiya" => "Vapoyev", "t_yili" => "2011"];
$son = [0=> 2 ,1 =>5];
print_r($user);
echo $user['ism'];
print_r($son);
$user['Familiya']= "Karimov";
echo $user['Familiya'];
$user['tel'] = 77777777777;
print_r( $user) ;



// 05.11
//remove arrays
$son = [] ;
$son[] = 1;
$son[] = 15;
$son['ism'] = "Ali";
print_r($son);
$cars = ["brand"=>"Ford","model"=>"Mustang","year"=>1987];
foreach($cars as $x =>$y ){
    echo "$x : $y <br>";

}
$cars = ["brand"=>"Ford","model"=>"Mustang"];
$cars +=["color"=>"red","year"=>1987];

$sonlar1 = [1,34,345,334,233,"test"];
array_splice($sonlar1,1,3);
print_r($sonlar1);
// Sorting
$son = [23,2,345,345,45,456,496,67,4,67,87,4,2,567,];
sort($son);
rsort($son);
print_r($son);

//Multidimensional massiv

$cars = [
    ["brand"=>"Ford","model"=>"Mustang","year"=>1987],
    ["brand"=>"bmv","model"=>"M5","year"=>1997],
    ["brand"=>"chevrolet","model"=>"nexia2","year"=>2007],
];
echo $cars[0]['model']."\n";
echo $cars[1]['model']."\n";
for($i = 0;$i < count($cars);$i++){
    foreach($cars as $item){
        echo $item." ";
    }
    echo "\n";
}
$sonl = [12,23,34,36,57,92,93,1,5,9,50];
foreach($sonl as $item){
    if($item %2 == 0){
        echo $item;
    }
}




















?>