<?php

if (!empty($_POST["login"])) {
  if (empty($_POST["username"]) || empty($_POST["password"])) {
      echo "Los campos están vacíos";
  } else {
      // Crea la sesión
      session_start();
      // Recoge el valor del usuario en el formulario (input text)
      $user=$_POST["username"];
      // Recoge el valor de la contraseña en el formulario (input text)
      $contraseña=$_POST["password"];
      // Llamamos al contenido de conexion.php (así podremos utilizar las variables de este archivo)
      include("../../conexion/conexion.php");
  }
}
/* La variable 'sql' hace una consulta donde: selecciona todo de la tabla 'tbl_users' donde el usuario es igual
a la variable '$user' y la contraseña igual a la variable '$contraseña' */ 
$sql=$mysqli->query("SELECT * FROM tbl_users WHERE username='$user' AND password='$contraseña'");
/* Si (se crea la variable '$datos') es igual a $sql, obtenemos la siguiente fila de datos */
if ($datos=$sql->fetch_object()) {
  /* Cremaos la sesión */
  $_SESSION['loggedin'] = true;
  header("location: ../../index.php");
} else {
  header("location: ../loginincorrecto.php");
}

?>