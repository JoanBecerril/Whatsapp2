<?php
$usuario = $_POST["username"];
$apellido = $_POST["surname"];
$email = $_POST["email"];
$contrasena = $_POST["password"];
$hash = password_hash($contrasena, PASSWORD_BCRYPT);
$confirmar_contrasena = $_POST["conf_password"];
$hashConfirmar = password_hash($confirmar_contrasena, PASSWORD_BCRYPT);
include("../../conexion/conexion.php");        


if (password_verify($confirmar_contrasena, $hash)) {

    $stmt_insert_user = mysqli_stmt_init($mysqli);
    $sql_insert_user = "INSERT INTO tbl_users(username, surname, email, password, conf_password) VALUES (?, ?, ?, ?, ?)";
    mysqli_stmt_prepare($stmt_insert_user, $sql_insert_user);
    mysqli_stmt_bind_param($stmt_insert_user, "sssss", $usuario, $apellido, $email, $hash, $hashConfirmar);
    mysqli_stmt_execute($stmt_insert_user);
    header("location: ../../login/login.php");
}
?>
