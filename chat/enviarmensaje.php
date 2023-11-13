<?php

include "./conexion/conexion.php";
session_start();
if($_POST)
{
	$username=$_SESSION['username'];
    $mensaje=$_POST['mensaje_chat'];
    
	$sql="INSERT INTO tbl_chat(usuario_chat, mensaje_chat) VALUES ('".$username."', '".$mensaje."')";

	$query = mysqli_query($mysqli,$sql);
	if($query)
	{
		header('Location: chat.php');
	}
	else
	{
		echo "Algo salió mal";
	}
	
	}
?>