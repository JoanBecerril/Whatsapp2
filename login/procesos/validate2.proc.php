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

$username = $_POST['new_username'];
$contrasena = $_POST['new_password'];

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
        $errores .="?contraseñaVacio=true";
     } else {
        $errores .="&contraseñaVacio=true";        
     }
}

/* La variable 'sql' hace una consulta donde: selecciona todo de la tabla 'tbl_users' donde el usuario es igual a la variable '$user' y la contraseña igual a la variable '$contrasena' */ 
$sql=$mysqli->query("SELECT * FROM tbl_register WHERE new_username='$username'");

if ($sql->num_rows>0) {

    /* Se crea la variable '$datos' que obtendrá la siguiente fila de la consulta anterior) */
    $datos=$sql->fetch_assoc();
    
    /*Creamos un hash que recojerá la contrasaeña de la base de datos*/
    $hashContraseña=$datos['new_password'];

    /*Comprobamos que la contraseña puesta sea igual a la de la base de datos*/
    if ($contrasena===$hashContraseña) {
        /* Creamos la sesión */
        session_start();
        $_SESSION['loggedin'] = true;

        header("location: ../../paginaprincipal.php");
    } else {
        if ($contrasena != "") {
            if (!$errores){
                $errores .="?contraseñaMal=true";
            } else {
                $errores .="&contraseñaMal=true";        
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
        'new_username' => $username,
        'new_password' => $contrasena,
    );

    $datosDevueltos=http_build_query($datosRecibidos);
    header("Location: ../login.php". $errores. "&". $datosDevueltos);
    exit();
}else{
    echo"<form id='EnvioCheck' action='../../paginaprincipal.php' method='POST'>";
    echo"<input type='hidden' id='username' name='new_username' value='".$username."'>";
    echo"<input type='hidden' id='password' name='new_password' value='".$contrasena."'>";
    echo"</form>";
    echo "<script>document.getElementById('EnvioCheck').submit();</script>";
 }
}