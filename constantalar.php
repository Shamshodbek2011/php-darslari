<?php 
class Car {
    public $model;
    public const BRAND = "Chevrolet";


    public const RANGI = "oq";


    public function info(){
        return "Bu ".self::BRAND ."mashina classi<br>";
    }
    public function rang(){
        return "Bu mashina rangi ". self::RANGI."<br>";
    }
}
echo  Car::BRAND."<br>";
$onix = new Car();
    echo $onix->info();
    echo $onix::BRAND ;
    echo $onix->rang();




?>