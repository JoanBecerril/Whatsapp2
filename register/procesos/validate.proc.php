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
?>

<?php
if (!filter_has_var(INPUT_POST, 'register')) {
    header('Location: '.'./register.proc.php');
    exit();
} else {

$errores="";

$username = $_POST['new_username'];
$surname = $_POST['new_surname'];
$email = $_POST['new_email'];
$contraseña = $_POST['new_password'];
$confirmar_contraseña = $_POST['new_conf_password'];


if (validaCampoVacio($username)){
    if (!$errores){
        $errores .="?usernameVacio=true";
     } else {
        $errores .="&usernameVacio=true";        
     }
  } else {
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        if (!$errores){
            $errores .="?usernameMal=true";
         } else {
            $errores .="&usernameMal=true";        
         }
    }
}

if (validaCampoVacio($surname)){
    if (!$errores){
        $errores .="?apellidoVacio=true";
     } else {
        $errores .="&apellidoVacio=true";        
     }
  } else {
    if(!preg_match("/^[a-zA-Z0-9]*$/",$surname)){
        if (!$errores){
            $errores .="?apellidoMal=true";
         } else {
            $errores .="&apellidoMal=true";        
         }
    }
}

if (validaCampoVacio($email)){
    if (!$errores){
        $errores .="?emailVacio=true";
     } else {
        $errores .="&emailVacio=true";        
     }
  } else {
    if(!filter_input(INPUT_POST, "new_email", FILTER_VALIDATE_EMAIL)){
        if (!$errores){
            $errores .="?emailMal=true";
         } else {
            $errores .="&emailMal=true";        
         }
    }
}

if (validaCampoVacio($contraseña)){
    if (!$errores){
        $errores .="?contraseñaVacio=true";
     } else {
        $errores .="&contraseñaVacio=true";        
     }
  } else {
    if(!preg_match("/^[a-zA-Z0-9]*$/",$contraseña)){
        if (!$errores){
            $errores .="?contraseñaMal=true";
         } else {
            $errores .="&contraseñaMal=true";        
         }
    }
}

if (validaCampoVacio($confirmar_contraseña)){
    if ($contraseña != "") {
        if (!$errores){
            $errores .="?contraseña2Vacio=true";
        } else {
            $errores .="&contraseña2Vacio=true";        
        }
    }
    
    } else {
    if(!preg_match("/^[a-zA-Z0-9]*$/",$confirmar_contraseña)){
        if (!$errores){
            $errores .="?contraseña2Mal=true";
        } else {
            $errores .="&contraseña2Mal=true";        
        }
    }
    else if ($contraseña != $confirmar_contraseña) {
        if (!$errores){
            $errores .="?contraseña2Repetir=true";
        } else {
            $errores .="&contraseña2Repetir=true";        
        }
    }
    
}

if ($errores!=""){

    $datosRecibidos = array(
        'new_username' => $username,
        'new_surname'=> $surname,
        'new_email' => $email,
        'new_password' => $contraseña,
        'new_conf_password' => $confirmar_contraseña 
    );
    
    $datosDevueltos=http_build_query($datosRecibidos);
    header("Location: ../register.php". $errores. "&". $datosDevueltos);
    exit();
}else{
    echo"<form id='EnvioCheck' action='register.proc.php' method='POST'>";
    echo"<input type='hidden' id='username' name='new_username' value='".$username."'>";
    echo"<input type='hidden' id='surname' name='new_surname' value='".$surname."'>";
    echo"<input type='hidden' id='email' name='new_email' value='".$email."'>";
    echo"<input type='hidden' id='password' name='new_password' value='".$contraseña."'>";
    echo"<input type='hidden' id='confirm_password' name='new_conf_password' value='".$confirmar_contraseña."'>";
    echo"</form>";
    echo "<script>document.getElementById('EnvioCheck').submit();</script>";
 }
}

