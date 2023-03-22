<?php

    include("conexion_be.php");
    $conexion=mysqli_connect("localhost","root","","login_register");
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $foto=$_POST['foto'];
    $categoria=$_POST['categoria'];
    $tienda_id=$_POST['tienda_id'];
    $sql="UPDATE plato SET nombre='$nombre',precio='$precio', foto='$foto', categoria='$categoria' where id='$id'";
    $query=mysqli_query($conexion,$sql);

        if($query){
            echo '
            <script>
                alert("Editado perfectamnete lo redirigir a la lista de datos")
                window.location ="lista_plato.php";
            </script>
        ';
        exit();
        }

?>