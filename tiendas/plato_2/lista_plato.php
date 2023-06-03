
<?php
// Verificar si se ha enviado el formulario para habilitar/inhabilitar un producto
if(isset($_POST['producto_id']) && isset($_POST['estado'])){
    $producto_id = $_POST['producto_id'];
    $estado = $_POST['estado'];
    $tienda_id =$_POST['tienda_id'];

    // Realizar las operaciones necesarias en la base de datos para habilitar/inhabilitar el producto
    $conexion = mysqli_connect("localhost", "root", "", "login_register");

    // Preparar la consulta
    $stmt = mysqli_prepare($conexion, "UPDATE plato SET estado = ?  WHERE id = ?");

    // Vincular los parámetros
    mysqli_stmt_bind_param($stmt, "ii", $estado, $producto_id);

    // Ejecutar la consulta
    mysqli_stmt_execute($stmt);

    // Cerrar la declaración y la conexión
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);

    // Redirigir al mismo archivo para evitar el reenvío del formulario
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lista de platos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="#" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: black;
            text-align: center;
        }

        table {
            margin-top: 20px;
            margin-left: 220px;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
            color: black;
        }

        thead {
            background-color: #c0c0c0;
        }

        tbody tr {
            background-color: #c0c0c0;
            color: #ffffff;
        }

        .table-success {
            background-color: #c0c0c0;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #c0c0c0;
        }

        .button-container {
            text-align: center;
            margin-top: 10px;
        }

        .button2 {
            display: inline-block;
            padding: 10px 20px;
            background-color: #808080;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            margin-right: 10px;
        }
        .button1{
            display: inline-block;
            padding: 10px 20px;
            background-color: #808080;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            margin-right: 10px;
            margin-left: 420px;
        }

        .button1:hover,
        .button2:hover {
            background-color: #656565;
        }

        .button1 a,
        .button2 a {
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>

<body style="background: linear-gradient(to bottom, #ffffff, #675f5f); background-repeat: no-repeat; background-attachment: fixed; margin: 0; padding: 0;">
    <div class="container">
        <h1>Lista de platos</h1>
        <div class="col-md-8">
            <table class="table table-striped table-bordered">
                <thead class="table-success">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>logo</th>
                        <th>Categoria</th>
                        <th>Tienda_id</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conexion = mysqli_connect("localhost", "root", "", "login_register");
                    $sql = "SELECT *  FROM plato ";
                    $query = mysqli_query($conexion, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['precio'] ?></td>
                            <td><img src="../img2/wallpaper.jpg<?php echo $row['foto'] ?>" width="50px"></td>
                            <td><?php echo $row['categoria'] ?></td>
                            <td><?php echo $row['tienda_id'] ?></td>
                            
                            <td>
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <input type="hidden" name="producto_id" value="<?php echo $row['id']; ?>">
                                    <?php if($row['estado'] == 1): ?>
                                        <button type="submit" name="estado" value="0" class="btn btn-danger">Inhabilitar</button>
                                    <?php else: ?>
                                        <button type="submit" name="estado" value="1" class="btn btn-success">Habilitar</button>
                                    <?php endif; ?>
                                </form>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div class="button-container">
                <button class="button1"><a href="../php/propi.php">Panel de control</a></button>
                <button class="button2"><a href="../php/registro_plato.php">Registrar</a></button>
            </div>
        </div>
    </div>
</body>
</html>