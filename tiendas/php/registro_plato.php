<?php

$tiendaInfo ="select * from tiendas";
$viewDatauser ="select * from plato";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="recursos/foto_tta.png">
    
    <link rel="stylesheet" href="../css_restauran/style.css">
    <style>
        .contenedor__login-register2 {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .formulario__propi {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 5px;
            border-radius: 5px;
            border: none;
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            outline: none;
        }

        .button1 {
            text-decoration: none;
            color: white;
            width: 100%;
            padding: 10px;
            background-color: blue;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            outline: none;
            margin-top: 5px;
            font-family: inherit;
            font-size: inherit;
        }
    </style>
    <title>Registro de platos</title>
</head>
<body background="./img2/2">
    <div class="contenedor__login-register2">
        <form action="registro_plato_be.php" method="POST" class="formulario__propi">
            <h2>Registrar platos</h2>
            <input type="text" required placeholder="Nombre" name="nombre">
            <input type="text" required placeholder="Categoría" name="categoria">
            <input type="text" required placeholder="Precio" name="precio">
            <input type="file" required name="foto">
            <label> Asigna una tienda </label>
            <select class="js-example-basic-single" style= "width: 100% " name="tiendas" id="tiendas">
                      <?php
                          $conexion = mysqli_connect("localhost","root","","login_register");
                      $viewDatauser = mysqli_query($conexion, $tiendaInfo);
                      while ($row = mysqli_fetch_assoc($viewDatauser)) {

                        echo '<option  value="' . $row["id"] . '">Nombre: ' . $row["nombre"] . ' / ID: ' . $row["id"] . '</option>';
                      }
                      ?>

                    </select><br>
            <div style="display: flex; gap: 10px;">
                <button>Registrarse</button>
                <button class="button1"><a href="propi.php" style="text-decoration: none; color: white;">Panel de control</a></button>
            </div>
        </form>
    </div>
</body>
</html>