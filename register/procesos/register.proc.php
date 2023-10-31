<?php   
if (!empty($_POST["register"])) {
    if (empty($_POST["usuario"]) || empty($_POST["apellido"]) || empty($_POST["email"]) || empty($_POST["contraseña"]) || empty($_POST["confirmar_contraseña"])) {
        echo "Los campos están vacíos";
    } else {
        $usuario=$_POST["usuario"];
        $apellido=$_POST["apellido"];
        $email=$_POST["email"];
        $contraseña=$_POST["contraseña"];
        $confirmar_contraseña=$_POST["confirmar_contraseña"];
        include("../../conexion/conexion.php");
        
        if ($contraseña != $confirmar_contraseña) {
            $sql=0;
            echo "Las contraseñas no coinciden";
        } else {
            $sql=$conexion->query("INSERT INTO tbl_users(nombre,apellido,psswd,confirm_psswd,email) VALUES ('$usuario','$apellido','$contraseña','$confirmar_contraseña','$email')");
            header("location: ../../index.html");
        }
    }
}