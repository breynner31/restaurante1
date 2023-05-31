<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="recursos/foto_tta.png">
    
    <link rel="stylesheet" href="../css_propi/style.css">
    <style>
        .contenedor {
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

        .cajon {
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 5px;
            border-radius: 5px;
            border: none;
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: black;
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
            background-color: black;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            outline: none;
            margin-top: 5px;
            font-family: inherit;
            font-size: inherit;
            text-decoration: none; 
        }
    </style>
    <title>Registro propietarios</title>
</head>
<body >
    <div class="contenedor">
        <div class="cajon">
            <div class="formulario__propi">
                <h2>Registrarse</h2>
                <input type="text" minlength="4" maxlength="8" size="10" placeholder="Usuario (4 o 8 caracteres):" name="usuario">
                <input type="email" required placeholder="Correo Electrónico" name="correo">
                <input type="password" required placeholder="Contraseña" name="contrasena">
                <button>Registrarse</button>
            </div>
            <button class="button1"><a href="admin.php">Panel de control</a></button>
        </div>
    </div>
</body>
</html>