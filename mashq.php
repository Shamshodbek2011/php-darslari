<?php  
$data ="";
$fayl = [1,12,52,45,46,57,86,64,90,81];
foreach($fayl as $item){
    if($item % 2 == 0){
    $data .= " ".$item.",";
    }
}

$file = fopen("data.txt","w");
 fwrite($file,"Juft sonlar".$data);
fclose($file);


?>