<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Vision - Login</title>
    <link rel="shortcut icon" href="../src/LOGO/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
</head>

<body>
    <header class="flex">
        <div class="nav">
            <img src="../src/LOGO/logoletrasgrandes.png" alt="">
        </div>
    </header>
    <div class="flex" id="oscuro">
        <div class="container">
            <h2 class="flex" id="titulo">INICIO DE SESION</h2>
            <br>
            <form action="./procesos/login.proc.php" method="POST">
                <div class="inputs">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="user">
                </div>
                <div class="inputs">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <br>
                <br>
                <button type="submit" name="login" value="login" class="boton">Iniciar sesión</button>
                <br>
                <p>Usuario y/o contraseña incorrectos</p>
                <br>
                <p id="registrarse">No tienes cuenta?
                    <a href="../register/register.php" id="registrarse">Registrate</p></a>
            </form>
        </div>
    </div>
</body>

</html>