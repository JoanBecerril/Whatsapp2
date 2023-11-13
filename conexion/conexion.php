<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    // Variable que hace una conexión al servidor mysqli donde conectamos el host, usuario, contraseña y la base de datos donde haremos la consulta (NewVision)
    $mysqli=mysqli_connect('localhost','root','',"db_whatsapp2");
} catch (Exception $e){
    echo "Error en la conexión con la base de datos: " . $e->getMessage();
    die();
}
?>