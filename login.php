<?php  
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $ism = $_POST['ism'];
    setcookie('ism' , $ism , time() +100);
    echo 'Cookie saqlandi! <a href="login.php">Sahifani yangilash</a>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <?php 
    if(isset($_COOKIE['ism'])){
        echo "<h2>Salom " . $_COOKIE['ism'] . "</h2>";
    } else {
       echo '
       <form action="" method="POST">
        <label for="">Ismingizni kiriting</label><br>
        <input type="text" name="ism" id=""><br>
        <input type="submit" value="Yuborish" ><br>
    </form>';
    } 
    ?>
    
</body>
</html>


