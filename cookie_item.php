<?php 
if(isset($_COOKIE["ism"])){
    echo "Salom " . $_COOKIE["ism"];
}else{
    echo "Cookie topilmadi";
}

?>