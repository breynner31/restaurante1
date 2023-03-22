
<?php
    //incluimos la conexion 
    
    include 'conexion_be.php';


    // variables
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    //encriptar contraseña
    $contrasena =hash('sha512',$contrasena);
    $activo=$_POST['activo'];
    // para al momento de insertar los valores y las variables que le dimos
    $query = "INSERT INTO propietarios_usuarios(usuario,correo,contrasena,rol_id,) 
              VALUES('$usuario','$correo','$contrasena','1',)";
    
    
        //verificar q el usuario no se repita en la base de datos
        $verificar_usuario =mysqli_query ($conexion,"SELECT * FROM propietarios_usuarios WHERE usuario='$usuario'");
        //MIRA LA FILA Y LA EVALUA DE usuario
        if(mysqli_num_rows($verificar_usuario)>0){
            echo '
                <script>
                    alert("Este usuario ya esta registrado,intenta con otro diferente")
                    window.location ="registro_propi.php";
                </script>
            ';
            exit();
        }
        
    
       //verificar q el correo no se repita en la base de datos
    $verificar_correo =mysqli_query ($conexion,"SELECT * FROM propietarios_usuarios WHERE correo='$correo'");
    //MIRA LA FILA Y LA EVALUA DE CORREO
    if(mysqli_num_rows($verificar_correo)>0){
        echo '
            <script>
                alert("Este correo ya esta registrado,intenta con otro diferente")
                window.location ="registro_propi.php";
            </script>
        ';
        exit();
    }



    
   
    

    $ejecutar = mysqli_query($conexion, $query);          
//Ejecutamos la accion de la conexion y le damos una condicion 
if($ejecutar){
    echo'
    
        <script>alert("usuario almacenado exitosamente");
        window.location ="registro_propi.php";
        </script>
    
    ';
    
}else{
    echo'
    
        <script>alert("Intentalo de nuevo");
        window.location ="registro_propi.php";
        </script>
    
    ';
}
//Aqui cerramos la conexion //
mysqli_close($conexion);
?>
