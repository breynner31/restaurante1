<?php
session_start();

if(!isset($_SESSION['usuario'])){
    echo '
    <script>

        alert("inicie session , por favor veifique los datos introducidos ");
        window.location ="index.php";

    </script>

';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido </title>
</head>
<body>
    <h1>Bienvenido al restaurante </h1>
    <a href="php/cerrar_sesion.php">cerrar sesion</a>
</body>
</html>