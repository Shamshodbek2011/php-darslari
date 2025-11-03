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






?>