

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type ="image/png" href="recursos/foto_tta.png">
    
    <link  rel="stylesheet" href="../css_restauran/style.css">
    <title>registgro de platos </title>
</head>
<body>
<div class= "contenedor__login-register2" >
 <form action="registro_plato_be.php" method="POST" class="formulario__propi">
<h2>Regístrar platos</h2>
<input type="text" required placeholder="Nombre" name="nombre">
<input type="text" required placeholder="categoria" name="categoria">
<input type="number" required placeholder="precio " name="precio">
<input type="file" required placeholder="" name="foto">
<button>Regístrarse </button>

</form>
<button  class="button1" ><a href="propi.php" >Panel de control</a> </button>
</div>

</body>
</html>