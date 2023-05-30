
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
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="#" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="actualizar.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="usuario" placeholder="usuario" value="<?php echo $row['usuario']  ?>">
                                <input type="email" class="form-control mb-3" name="correo" placeholder="correo" value="<?php echo $row['correo']  ?>">
                                <input type="number" class="form-control mb-3" name="rol_id" placeholder="rol_id" value="<?php echo $row['rol_id']  ?>"> 
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
