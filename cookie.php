<?php
setcookie("ism","Sarvar",time() +60);

if(isset($_COOKIE["ism"])){
    echo "Salom " . $_COOKIE["ism"];
}else{
    echo "Cookie topilmadi";
}














?>