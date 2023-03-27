<?php
    session_start();
    include 'conexion_be.php';

    $usuario = $_POST ['usuario'];
    $correo  = $_POST ['correo'];
    $contrasena =$_POST ['contrasena'];
    $contrasena = hash('sha512', $contrasena);
    // validamos 
    $validar_login ="SELECT * FROM propietarios_usuarios WHERE usuario='$usuario' and correo ='$correo'and contrasena='$contrasena'";
    $resultado = mysqli_query ($conexion,$validar_login);
    $filas = mysqli_fetch_array($resultado);

    
  
    if (mysqli_num_rows($resultado)>0){
        if($filas['rol_id']==1){
            $_SESSION['usuario'] =$correo;
            header("location: ../tiendas_3/php/propi.php");
            exit;
    }}
    if($filas['rol_id']==2)  {
        header("location: ../tiendas_3/php/propi.php");
        exit;
    
    
    }
    if($filas['rol_id']==3)  {
        header("location: ../tiendas_3/php/propi.php");
        exit;
    
    
    }

    
else{        echo '
    <script>

        alert("Usuario no existe, por favor veifique los datos introducidos ");
        window.location ="propietarios.php";

    </script>

';
exit;

    }
    mysqli_close($conexion);
?>