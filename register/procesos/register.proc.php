<?php
$usuario=$_POST["new_username"];
$apellido=$_POST["new_surname"];
$email=$_POST["new_email"];
$contraseña=$_POST["new_password"];
$confirmar_contraseña=$_POST["new_conf_password"];
include("../../conexion/conexion.php");        
        
$sql=$mysqli->query("INSERT INTO tbl_register(new_username,new_surname,new_email,new_password,new_conf_password) VALUES ('$usuario','$apellido','$email','$contraseña','$confirmar_contraseña')");
header("location: ../../login/login.php");
?>