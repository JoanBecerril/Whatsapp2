<?php
session_start();
	if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || !isset($_SESSION['username'])) {
    	header("location: ./login/login.php");
    	exit;
	}else{
		include "./headers/header2.php"; 
		include "./conexion/conexion.php";
		
		$sql="SELECT * FROM tbl_chat";

		$query = mysqli_query($mysqli,$sql);
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitudes de Amistad</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        #friendRequests {
            display: flex;
            flex-direction: column;
        }

        .request {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 8px;
        }

        .request img {
            border-radius: 50%;
            margin-right: 10px;
            width: 100px;
        }

        .user-info {
            flex-grow: 1;
        }

        button {
            padding: 8px;
            margin: 0 5px;
            cursor: pointer;
        }

        .accept {
            background-color: #4CAF50;
            color: white;
            border: none;
        }

        .reject {
            background-color: #f44336;
            color: white;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Solicitudes de Amistad</h1>
        </header>
        <section id="friendRequests">
            <!-- Aquí se mostrarán las solicitudes de amistad -->
            <div class="request">
                <img src="./img/rajoy.jpeg" alt="Usuario 1">
                <div class="user-info">
                    <h2>Usuario 1</h2>
                    <button class="accept">Aceptar</button>
                    <button class="reject">Rechazar</button>
                </div>
            </div>
            <!-- <div class="request">
                <img src="./images/rajoy.jpeg" alt="Usuario 2">
                <div class="user-info">
                    <h2>Usuario 2</h2>
                    <button class="accept">Aceptar</button>
                    <button class="reject">Rechazar</button>
                </div>
            </div> -->
            <!-- Agrega más solicitudes según sea necesario -->
        </section>
    </div>
</body>
</html>