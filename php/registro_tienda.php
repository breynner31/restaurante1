
**Formulario (registro_tienda.php):**
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="recursos/foto_tta.png">
    
    <link rel="stylesheet" href="css_restauran/style.css">
    <title>Registro de tiendas</title>
</head>
<body>
    <div class="contenedor__login-register2">
        <form action="registro_tiendas_be.php" method="POST" class="formulario__propi" enctype="multipart/form-data">
            <h2>Registrar tiendas</h2>
            <input type="text" required placeholder="Nombre" name="nombre">
            <input type="text" required placeholder="Lugar" name="lugar">
            <input type="file" required name="foto">
            <button type="submit">Registrar tiendas</button>
        </form>
        <button class="button1"><a href="admin.php">Panel de control</a></button>
    </div>
</body>
</html>