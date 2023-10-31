<?php

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: ./login/login.php");
    exit;
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("location: ./login/login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Vision</title>
    <link rel="shortcut icon" href="./src/LOGO/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
</head>

<body>
    <div id="oscuro">
        <header class="flex">
            <div class="nav">
                <img src="./src/LOGO/logoletrasgrandes.png" alt="">
            </div>
        </header>
        <div class="flex texto">
            <p>LA PLATAFORMA PARA<br>GESTIONAR ESCUELAS</p>
        </div>
        <br>
        <div class="flex botones">
            <a href="./login/login.php"><button>LOGIN</button></a>
            <a href="./register/register.php"><button>REGISTER</button></a>
        </div>
        <div>
            <a href="?logout=true">Atrás</a>
        </div>
    </div>
</body>
</html>