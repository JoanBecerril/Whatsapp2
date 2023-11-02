<?php
/* Si pulsamos el botón de registrar, hacemos una validación */   
if (!empty($_POST["register"])) {
    /* Si TODOS los campos están vacíos, escribimos un mensaje */
    if (empty($_POST["usuario"]) || empty($_POST["apellido"]) || empty($_POST["email"]) || empty($_POST["contraseña"]) || empty($_POST["confirmar_contraseña"])) {
        echo "Los campos están vacíos";
    /* Sino, crea las variables que recojen los campos de la base de datos */
    } else {
        $usuario=$_POST["new_username"];
        $apellido=$_POST["new_surname"];
        $email=$_POST["new_email"];
        $contraseña=$_POST["new_password"];
        $confirmar_contraseña=$_POST["new_conf_password"];
        include("../../conexion/conexion.php");
        
        if ($contraseña != $confirmar_contraseña) {
            $sql=0;
            echo "Las contraseñas no coinciden";
        } else {
            $sql=$mysqli->query("INSERT INTO tbl_register(new_username,new_surname,new_password,new_conf_password,new_email) VALUES ('$usuario','$apellido','$contraseña','$confirmar_contraseña','$email')");
            header("location: ../../index.html");
        }
    }
}