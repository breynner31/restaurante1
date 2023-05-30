<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Lista de usuarios </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="#" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <div class="container p-2 my-2 bg-warning text-white"><h3>Lista de propietarios</h3></div>

<div class="col-md-8">
    <table class="table table-dark table-hover" border="3">
        <thead class="table bg-warning table-striped" >
                <button style="margin: 25px;" class="btn btn-info btn-sm" type="button"><a href="../php/propi.php" >Panel de control</a> </button>
                        <button style="margin: 25px;" class="btn btn-info btn-sm" type="button" ><a href="../php/registro_propi.php" >Registrar </a> </button>
                       
                                    <tr>
                                        <th>id</th>
                                        <th>usuario</th>
                                        <th>correo</th>
                                        <th>roles</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $conexion=mysqli_connect("localhost","root","","login_register");  
                                        $sql="SELECT *  FROM tiendas ";
                                        $query=mysqli_query($conexion,$sql);
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['lugar']?></th> 
                                                <th> <img src="../img2/wallpaper.jpg<?php  echo $row['foto'] ?>" width= "50px " ></th>   
                                                                                     
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
