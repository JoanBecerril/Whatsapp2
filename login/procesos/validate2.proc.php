<?php
$error="";
function validaCampoVacio($campo) {
    if(empty($campo)){
        $error= true; //Hay un error
    }else{
        $error= false; //No hay un error
    }
    return $error;
}


if (!filter_has_var(INPUT_POST, 'login')) {
    header('Location: '.'./login.proc.php');
    exit();
} else {

$errores="";

$username = $_POST['username'];
$contrasena = $_POST['password'];

include("../../conexion/conexion.php");

if (validaCampoVacio($username)){
    if (!$errores){
        $errores .="?usernameVacio=true";
    } else {
        $errores .="&usernameVacio=true";        
    }
}

if (validaCampoVacio($contrasena)){
    if (!$errores){
        $errores .="?contrasenaVacio=true";
     } else {
        $errores .="&contrasenaVacio=true";        
     }
}

/* La variable 'sql' hace una consulta donde: selecciona todo de la tabla 'tbl_users' donde el usuario es igual a la variable '$user' y la contrasena igual a la variable '$contrasena' */ 
// $sql=$mysqli->query("SELECT * FROM tbl_users WHERE username='$username'");
$sql = "SELECT * FROM tbl_users WHERE username='$username'";
$stmt = mysqli_prepare($mysqli, $sql);
mysqli_stmt_execute($stmt);
$consulta = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($consulta) > 0) {

    /* Se crea la variable '$datos' que obtendrá la siguiente fila de la consulta anterior) */
    $datos = mysqli_fetch_assoc($consulta);

    /*Creamos un hash que recojerá la contrasaena de la base de datos*/
    $hashContrasena=$datos['password'];

    /*Comprobamos que la contrasena puesta sea igual a la de la base de datos (el hash)*/
    if ($contrasena===$hashContrasena) {
        /* Creamos la sesión */
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: ../../paginaprincipal.php");
    } else {
        if ($contrasena != "") {
            if (!$errores){
                $errores .="?contrasenaMal=true";
            } else {
                $errores .="&contrasenaMal=true";        
            }
        }
            
    }    
}

else {
    if ($username != "") {
            if (!$errores){
                $errores .="?usernameMal=true";
            } else {
                $errores .="&usernameMal=true";        
            }
    }
        
}

if ($errores!=""){

    $datosRecibidos = array(
        'username' => $username,
        'password' => $contrasena,
    );

    $datosDevueltos=http_build_query($datosRecibidos);
    header("Location: ../login.php". $errores. "&". $datosDevueltos);
    exit();
}else{
    echo"<form id='EnvioCheck' action='../../paginaprincipal.php' method='POST'>";
    echo"<input type='hidden' id='username' name='username' value='".$username."'>";
    echo"<input type='hidden' id='password' name='password' value='".$contrasena."'>";
    echo"</form>";
    echo "<script>document.getElementById('EnvioCheck').submit();</script>";
 }
}