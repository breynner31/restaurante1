<?php




$conexion=mysqli_connect("localhost","root","","login_register");

$id=$_GET['id'];

$sql="SELECT * FROM usuarios1 WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Actualizar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="#" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 40px 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .btn-block {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <div class="mb-3">
                <input type="text" class="form-control" name="usuario" placeholder="Usuario"
                    value="<?php echo $row['usuario'] ?>">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" name="correo" placeholder="Correo"
                    value="<?php echo $row['correo'] ?>">
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" name="rol_id" placeholder="Rol ID"
                    value="<?php echo $row['rol_id'] ?>">
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>
    </div>
</body>

</html>
