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
                        <h1>Bienvenido ala lista de Propietarios</h1>
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id</th>
                                        <th>usuario</th>
                                        <th>correo</th>
                                        <th>roles</th>
                                        
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <button  class="button1" ><a href="../php/admin.php" >Panel de control</a> </button>
                                <button  class="button2" ><a href="../php/registro_propi.php" >Registrar </a> </button>
                                <tbody>
                                        <?php
                                         
                                        $conexion=mysqli_connect("localhost","root","","login_register");  
                                        $sql="SELECT * FROM propietarios_usuarios where rol_id";
                                        
                                        $query=mysqli_query($conexion,$sql);
                                        $row=mysqli_fetch_array($query);
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['usuario']?></th>
                                                <th><?php  echo $row['correo']?></th> 
                                                <th><?php  echo $row['rol_id']?></th>     
                                                <th><a href="editar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th> 

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
