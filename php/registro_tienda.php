<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="recursos/foto_tta.png">
    <link rel="stylesheet" href="../recursos/JjUjya.jpg">
    
    <link rel="stylesheet" href="css_restauran/style.css">
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
    <title>Registro de tiendas</title>
</head>
<body background="./recursos/JjUjya.jpg">
    <div class="contenedor__login-register2">
        <form action="registro_tiendas_be.php" method="POST" class="formulario__propi" enctype="multipart/form-data">
            <h2>Registrar tiendas</h2>
            <input type="text" required placeholder="Nombre" name="nombre">
            <input type="text" required placeholder="Lugar" name="lugar">
            <input type="file" required name="foto">
            <button type="submit">Registrar tiendas</button>
            <a href="admin.php" class="button1">Panel de control</a>
        </form>
    </div>
</body>
</html>