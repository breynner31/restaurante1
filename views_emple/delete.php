<?php

include("conexion_be.php");
$conexion=mysqli_connect("localhost","root","","login_register");  
$id=$_GET['id'];

$sql="DELETE FROM   usuarios1 where id='$id'";
$query=mysqli_query($conexion,$sql);

    if($query){
        header ("location: lista.php");
    }


?>