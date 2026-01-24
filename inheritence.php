<?php 
  class Animal {
    public  $name;
    public $zoti;
    public $ogirligi;

public function   __construct($name,$zoti){
  $this->name=$name;
  $this->zoti=$zoti;
}


    public function eat(){
        return "Hayvon ovqat yemoqda <br>";
    }
    public function getname(){
      return "";
    }
  }
  class Dog extends Animal {
    public function bark(){
        return "Vov vov <br> ";
    }
  }
  $dog = new Dog();
  echo $dog->eat();
  echo $dog->bark();
  var_dump($dog);










  
?>









