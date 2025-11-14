<?php
$name = $email = $massage = "";
$nameErr = $emailErr = $massageErr = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //Ism tekshirish
    if (empty($_POST['name'])) {
        $nameErr = "Ismni kiriting";
    } else {
        $name = $_POST['name'];
        if (!preg_match("/^[a-zA-Z-' ]*S/", $name)) {
            $nameErr = "Faqat bosh joy va harf bo'lishi mumkin";
        }
    }
}
// Email
if (empty($_POST['email'])) {
    $emailErr = "emailni kiriting";
} else {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "EMAIL NOTOGRI FORMATDA";
    }
}
//Massage
if (empty($_POST['Xabar'])) {
    $massageErr = "Xabar kiriting";
} else {
    $massage = $_POST['name'];
    if (!preg_match("/^[a-zA-Z-' ]*S/", $massage)) {
        $massageErr = "Faqat bosh joy va harf bo'lishi mumkin";
    }
}

?>

<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biz haqimizda</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        background: linear-gradient(135deg, #74b9ff, #0984e3);
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .container {
        background: #fff;
        width: 90%;
        max-width: 500px;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    .container h1 {
        color: #0984e3;
        margin-bottom: 15px;
    }

    .intro {
        font-size: 15px;
        color: #555;
        margin-bottom: 25px;
    }

    .about-form {
        display: flex;
        flex-direction: column;
        gap: 15px;
        text-align: left;
    }

    .about-form label {
        font-weight: 600;
        color: #333;
    }

    .about-form input,
    .about-form textarea {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        transition: 0.3s;
    }

    .about-form input:focus,
    .about-form textarea:focus {
        border-color: #0984e3;
        outline: none;
        box-shadow: 0 0 5px rgba(9, 132, 227, 0.4);
    }

    .about-form button {
        background: #0984e3;
        color: white;
        border: none;
        padding: 12px;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    .about-form button:hover {
        background: #74b9ff;
    }
</style>

<body>
    <div class="container">
        <h1>Biz haqimizda</h1>
        <p class="intro">
            Biz mijozlarimizga eng sifatli xizmatlarni taqdim etuvchi jamoamiz. Quyidagi formani to‘ldirib,
            biz bilan bog‘lanishingiz mumkin.
        </p>

        <form class="about-form" action="" method="POST">
            <label for="name">Ismingiz</label>
            <input type="text" id="name" value="<?= $name ?>" name="name" placeholder="Ismingizni kiriting">
            <span style="color:red;"><?= $nameErr ?></span>

            <label for="email">Email manzilingiz</label>
            <input type="email" id="email" name="email" placeholder="Email manzilingizni kiriting">
            <span style="color:red"><?= $emailErr ?></span>
            <label for="message">Xabar</label>
            <textarea id="message" name="message" rows="5" placeholder="Xabaringizni yozing...">
            <?=  $massage ?>
            </textarea>
            <span style="color:red;"><?= $massageErr ?></span>

            <button type="submit">Yuborish</button>
        </form>
    </div>
</body>

</html>