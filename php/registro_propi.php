<?php
$tiendaInfo = "SELECT * FROM tiendas";
$viewDatauser = "SELECT * FROM usuarios1";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="recursos/foto_tta.png">
    <link rel="stylesheet" href="../css_propi/style2.css">
    <style>
        .button1 {
            text-decoration: none;
            color: white;
        }

        .contenedor__login-register2 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .formulario__propi {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        input,
        select {
            width: 100%;
            padding: 5px;
            border-radius: 5px;
            border: none;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <title>Registro propietarios</title>
</head>
<body>
    <div class="contenedor__login-register2">
        <form action="registro_propi_be.php" method="POST" class="formulario__propi">
            <h2>Registro propietarios</h2>
            <input type="text" minlength="4" maxlength="8" placeholder="Usuario (4 o 8 caracteres)" name="usuario">
            <input type="email" required placeholder="Correo Electronico" name="correo">
            <input type="password" required placeholder="Contraseña" name="contrasena">
           
     <label> Asigne  una tienda</label>             
    <select class="js-example-basic-single" style= "width: 100% " name="tiendas" id="tiendas" >

                      <?php
                          $conexion = mysqli_connect("localhost","root","","login_register");
                      $viewDatauser = mysqli_query($conexion, $tiendaInfo);
                      while ($row = mysqli_fetch_assoc($viewDatauser)) {
                        
                        echo '<option  value="' . $row["id"] . '">Nombre: ' . $row["nombre"] . ' / ID: ' . $row["id"] . '</option>';
                      }
                      ?>
                     
                    </select><br>
                    <button type="submit">Registrarse</button>
            <button><a class="button1" href="admin.php">Panel de control</a></button>
        </form>
  
                    
    </div>
</body>
</html>