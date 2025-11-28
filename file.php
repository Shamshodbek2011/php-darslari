<?php
//Faylydan malumotlarni oqish
$file = fopen("taxt.txt","r");
$content = fread($file,filesize("taxt.txt"));
fclose( $file);
echo $content."<br>";

//Faylga yozish
$file = fopen("data.txt","w");
fwrite($file,"Faylga malumot yozish");
fclose($file);
echo "Malumotlar faylga yozildi";


//Faylga malumot yozish yozish
$file = fopen("data.txt","a");
fwrite($file,"\nFaylga yangi malumot   yozish");
fclose($file);
echo "Malumotlar faylga yozildi";

//Fayl mavjudlgin tekshirish
if(file_exists("data.txt")){
    echo "Fayl mavjud";
}else{
    echo "Fayl mavjud emas <br>";
}

//Faylni o'chirish
if(file_exists("data1.php")){
    unlink("data1.php");
    echo "Fayl o'chirildi";
}else{
    echo "Fayl mavjud emas";
}
//
$file = fopen("data.txt","r");
while(!feof($file)){
    $line = fgets($file);
    echo $line."<br>";
}
fclose($file);

$content = file_get_contents("data.txt");
echo $content."<br>";

file_put_contents("taxt.txt","sdfghjkhghjkjhgf");
file_put_contents("taxt.txt","sdfghjkhghjkjhgf",FILE_APPEND);










?>