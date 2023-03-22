<?php

include("conexion_be.php");
$conexion=mysqli_connect("localhost","root","","login_register");  
$id=$_GET['id'];

$sql="DELETE FROM  plato where id='$id'";
$query=mysqli_query($conexion,$sql);

    if($query){
        echo'
    
        <script>alert("plato borrado exitosamente");
        window.location ="lista_plato.php";
        </script>
    
    ';
    
    }


?>