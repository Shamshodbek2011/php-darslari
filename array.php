<?php 
$sonlar = [2,5,7,34,24];
function kattasonlar($massiv){
 $max = $massiv[0];
    foreach($massiv as $value){
            if($value > $max){
                $max = $value ;
            }
            
    }
    return $max ;
}
echo kattasonlar($sonlar);


echo"\n";



















?>