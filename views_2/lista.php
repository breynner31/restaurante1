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
    <body background="img/0bg.jpg">
        <center>
            <div class="container p-2 my-2 bg-warning text-white"><h3>Lista de propietarios</h3></div>

                        <div class="col-md-8">
                            <table class="table table-dark table-hover" border="3">
                                <thead class="table bg-warning table-striped" >
                                        <button style="margin: 25px;" class="btn btn-info btn-sm" type="button"><a href="../php/admin.php" >Panel de control</a> </button>
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
                                        $sql="SELECT * FROM usuarios1 where rol_id";
                                        
                                        $query=mysqli_query($conexion,$sql);
                                        $row=mysqli_fetch_array($query);
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['usuario']?></th>
                                                <th><?php  echo $row['correo']?></th> 
                                                <th><?php  echo $row['rol_id']?></th>   
                                               <td><a href="editar.php?id=<?php echo $row['id'] ?>" class="btn btn-info btn default">Editar</a></td>
                                                <td><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn default">Eliminar</a></td>                                         
                                            </tr>
                                        <?php 
                                            }
                                        
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
        </center>
    </body>
</html>