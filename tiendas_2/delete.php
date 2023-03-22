<?php

include("conexion_be.php");
$conexion=mysqli_connect("localhost","root","","login_register");  
$id=$_GET['id'];

$sql="DELETE FROM  productos  where id='$id'";
$query=mysqli_query($conexion,$sql);

    if($query){
        echo'
    
        <script>alert("usuario borrado exitosamente");
        window.location ="lista.php";
        </script>
    
    ';
    
    }


?>