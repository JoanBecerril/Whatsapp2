<?php
// Recoge el valor del usuario en el formulario (input text)
$usuario=$_POST["new_username"];

// Recoge el valor de la contraseña en el formulario (input text)
$contraseña=$_POST["new_password"];

// Llamamos al contenido de conexion.php (así podremos utilizar las variables de este archivo)
include("../../conexion/conexion.php");

/* La variable 'sql' hace una consulta donde: selecciona todo de la tabla 'tbl_users' donde el usuario es igual a la variable '$user' y la contraseña igual a la variable '$contraseña' */ 
$sql=$mysqli->query("SELECT * FROM tbl_register WHERE new_username='$user' AND new_password='$contraseña'");

/* Si (se crea la variable '$datos' que obtendrá la siguiente fila de la consulta anterior) */
if ($datos=$sql->fetch_object()) {
  header("location: ../../paginaprincipal.php");
}
?>