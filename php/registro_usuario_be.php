<?php
    //incluimos la conexion 
    
    include 'conexion_be.php';


    // variables

    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    //encriptar contraseña
    $contrasena =hash('sha512',$contrasena);
    // para al momento de insertar los valores y las variables que le dimos
    $query = "INSERT INTO usuarios1(usuario,correo,contrasena,rol_id) 
              VALUES('$usuario','$correo','$contrasena','0')";

    //verificar q el usuario no se repita en la base de datos
    $verificar_usuario =mysqli_query ($conexion,"SELECT * FROM usuarios1 WHERE usuario='$usuario'");
    //MIRA LA FILA Y LA EVALUA DE usuario
    if(mysqli_num_rows($verificar_usuario)>0){
        echo '
            <script>
                alert("Este usuario ya esta registrado,intenta con otro diferente")
                window.location ="../index.php";
            </script>
        ';
        exit();
    }
    

       //verificar q el correo no se repita en la base de datos
    $verificar_correo =mysqli_query ($conexion,"SELECT * FROM usuarios1 WHERE correo='$correo'");
    //MIRA LA FILA Y LA EVALUA DE CORREO
    if(mysqli_num_rows($verificar_correo)>0){
        echo '
            <script>
                alert("Este correo ya esta registrado,intenta con otro diferente")
                window.location ="../index.php";
            </script>
        ';
        exit();
    }


      
    
   
    

    $ejecutar = mysqli_query($conexion, $query);          
//Ejecutamos la accion de la conexion y le damos una condicion 
if($ejecutar){
    echo'
    
        <script>alert("usuario almacenado exitosamente");
        window.location ="../index.php";
        </script>
    
    ';
    
}else{
    echo'
    
        <script>alert("Intentalo de nuevo");
        window.location ="bienvenida.php";
        </script>
    
    ';
}
//Aqui cerramos la conexion //
mysqli_close($conexion);
?>
