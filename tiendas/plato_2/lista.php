<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Lista de restaurantes </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="#" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id</th>
                                        <th>nombre</th>
                                        <th>lugar</th>
                                        <th>logo</th>
                                       
                                    </tr>
                                </thead>
                                <button  class="button1" ><a href="../php/propi.php" >Panel de control</a> </button>
                                <tbody>
                                    <?php
                                        $conexion=mysqli_connect("localhost","root","","login_register");  
                                        $sql="SELECT *  FROM productos ";
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
