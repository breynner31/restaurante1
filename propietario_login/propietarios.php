
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type ="image/png" href="recursos/foto_tta.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <link  rel="stylesheet" href="../css_propi/style.css">
    <title>registro propietarios</title>
</head>
<body>
<div   class= "contenedorlogin-register2" >
 <form  action="login_usuario_be.php" method="POST" class="formulariopropi">
<h2>Iniciar Propietarios</h2>
<input type="text" minlength="4" maxlength="8" size="10"  placeholder="Usuario (4 o 8 caracteres): " name="usuario">
<input type="email" required="@gmail.com" placeholder="Correo Electronico" name="correo">
<input type="password" required placeholder="Contraseña" name="contrasena">
<button><a  class="badge bg-secondary text-dark " href="../tiendas/php/propi.php" >Panel de propietarios</a> </button>
<button><a class="badge bg-secondary text-dark" href="../index.php" >Panel de control</a> </button>
</form>


</body>
</html>