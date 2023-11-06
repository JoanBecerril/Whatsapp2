<?php

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: ./login/login.php");
    exit;
}

echo "Fin";
?>
<script>
    alert("Donde salimos este finde");
    alert("Razzz");
    alert("Es buena");
    alert("Yo ahí no voy, va gente muy rara");
    alert("Votad");
    alert("Vamos el sábado??");
    alert("Los sábados ponen tecno");
    alert("Al final nadie va razz? Esque sois tontos tío");
    alert("Parkineo zoco");
</script>
