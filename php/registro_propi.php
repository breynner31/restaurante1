

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type ="image/png" href="recursos/foto_tta.png">
    <link  rel="stylesheet" href="../css_propi/style2.css">
    <title>registgro propietarios</title>
</head>
<body>
<div class= "contenedor__login-register2" >
 <form action="registro_propi_be.php" method="POST" class="formulario__propi">
<h2>Regístro propietarios</h2>
<input type="text" minlength="4" maxlength="8" size="10"  placeholder="Usuario (4 o 8 caracteres): " name="usuario">
<input type="email" required="@gmail.com" placeholder="Correo Electronico" name="correo">
<input type="password" required placeholder="Contraseña" name="contrasena">
<button>Regístrarse </button>
<button><a class="button1" href="admin.php" >Panel de control</a></button>
</form>
</div>
</body>
</html>