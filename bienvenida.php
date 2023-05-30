<?php
session_start();

if(!isset($_SESSION['usuario'])){
    echo '
    <script>

        alert("inicie session , por favor veifique los datos introducidos ");
        window.location ="index.php";

    </script>

';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido </title>
</head>
<body>
    <h1>Bienvenido al restaurante </h1>
    <a href="php/cerrar_sesion.php">cerrar sesion</a>


    <?php



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Menu de platos </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="#" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                        <h1> Menu </h1>
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id</th>
                                        <th>nombre</th>
                                        <th>precio</th>
                                        <th>logo</th>
                                        <th>categoria</th>
                                        <th>tienda_id</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $conexion=mysqli_connect("localhost","root","","login_register");  
                                        $sql="SELECT *  FROM plato ";
                                        $query=mysqli_query($conexion,$sql);
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['precio']?></th> 
                                                <th> <img src="../img2/wallpaper.jpg<?php  echo $row['foto'] ?>" width= "50px " ></th> 
                                                <th><?php  echo $row['categoria']?></th>  
                                                <th><?php  echo $row['tienda_id']?></th>  
                                                    
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>

    </body>
</html>


    

</body>
</html>