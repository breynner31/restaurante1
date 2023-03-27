<?php

    include("conexion_be.php");
    $conexion=mysqli_connect("localhost","root","","login_register");
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $lugar=$_POST['lugar'];
    $foto=$_POST['foto'];

    $sql="UPDATE productos SET nombre='$nombre',lugar='$lugar', foto='$foto' where id='$id'";
    $query=mysqli_query($conexion,$sql);

        if($query){
            echo '
            <script>
                alert("Editado perfectamnete lo redirigir a la lista de datos")
                window.location ="lista.php";
            </script>
        ';
        exit();
        }

?>