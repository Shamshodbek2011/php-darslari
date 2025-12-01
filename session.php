<?php 
session_start();

$_SESSION['name']  ="Ramazon";
$_SESSION['age']  = 15;
echo "Name:".$_SESSION["name"]."<br>";
echo "Age:".$_SESSION["age"]."<br>";




?>