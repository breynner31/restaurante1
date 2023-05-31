<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lista de Restaurante</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="#" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .table {
            table-layout: fixed;
        }

        .table td {
            word-wrap: break-word;
            overflow-wrap: break-word;
            max-width: 200px;
        }

        .btn-link {
            text-decoration: none;
            color:#fff
        }
    </style>
</head>
<body style="  background: linear-gradient(to bottom, #353b37, #e8f0ea);
background-repeat: no-repeat;
background-attachment: fixed;
margin: 0;
padding: 0;">
    <div class="container">
        <div class="p-2 my-2 bg-dark text-white text-center">
            <h3>Lista de Restaurante</h3>
        </div>
        <div class="col-md-12 d-flex justify-content-center">
            <table class="table table-dark table-hover">
                <thead class="bg-warning table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Lugar</th>
                        <th>foto</th>
                        
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conexion = mysqli_connect("localhost", "root", "", "login_register");
                    $sql = "SELECT *  FROM tiendas ";
                    $query = mysqli_query($conexion, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['lugar'] ?></td>
                            <td><img src="img/<?php echo $row['foto'] ?>" width="50px"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-dark btn-sm m-2"><a href="../php/propi.php" class="btn-link">Panel de control</a></button>
        </div>
    </div>
</body>
</html>