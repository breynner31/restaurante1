<?php

    include("conexion_be.php");
    $conexion=mysqli_connect("localhost","root","","login_register");
    $id=$_POST['id'];
    $usuario=$_POST['usuario'];
    $correo=$_POST['correo'];
    $rol_id=$_POST['rol_id'];

    $sql="UPDATE propietarios_usuarios SET usuario='$usuario',correo='$correo',rol_id='$rol_id' where id='$id'";
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