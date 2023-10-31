<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Vision - Register</title>
    <link rel="shortcut icon" href="../src/LOGO/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./register.css">
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
            <h2 class="flex" id="titulo">REGISTRO</h2>
            <br>
            <form action="./procesos/register.proc.php" method="POST">
                <div class="inputs">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="usuario" id="username" required>
                </div>
                <div class="inputs">
                    <label for="apellido">Apellido:</label>
                    <input type="text" class="form-control" id="surname" name="apellido" required>
                </div>
                <div class="inputs">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="inputs">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" name="contraseña" id="password" required>
                </div>
                <div class="inputs">
                    <label for="confirm-password">Confirmar Contraseña:</label>
                    <input type="password" class="form-control" name="confirmar_contraseña" id="confirm_password" required>
                </div>
                <br>
                <button type="submit" name="register" value="register" class="boton">Registrarse</button>
                <br>
                <p id="registrarse">Ya tienes cuenta?
                    <a href="../login/login.php" id="registrarse">Inicia Sesión</p></a>
            </form>
</body>

</html>