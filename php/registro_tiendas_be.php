<?php
    //incluimos la conexion 
    
    include 'conexion_be.php';
    $conexion = mysqli_connect("localhost","root","","login_register");

    // variables

    $nombre = $_POST['nombre'];
    $lugar = $_POST['lugar'];
    $foto = $_POST['foto'];
    $query = "INSERT INTO productos(nombre,lugar,foto)VALUES('$nombre','$lugar','$foto')";

    //verificar q el usuario no se repita en la base de datos
    $verificar_nombre =mysqli_query ($conexion,"SELECT * FROM productos WHERE nombre='$nombre'");
    //MIRA LA FILA Y LA EVALUA DE usuario
    if(mysqli_num_rows($verificar_nombre)>0){
        echo '
            <script>
                alert("Este nombre ya esta registrado, intenta con otro diferente")
                window.location ="registro_tienda.php";
            </script>
        ';
        exit();
    }
    

       //verificar q el correo no se repita en la base de datos
    $verificar_lugar =mysqli_query ($conexion,"SELECT * FROM productos WHERE lugar='$lugar'");
    //MIRA LA FILA Y LA EVALUA DE CORREO
    if(mysqli_num_rows($verificar_lugar)>0){
        echo '
            <script>
                alert("Este lugar ya esta registrado, intenta con otro diferente")
                window.location ="registro_tienda.php";
            </script>
        ';
        exit();
    }
          //verificar q la foto no se repita en la base de datos
          $verificar_foto =mysqli_query ($conexion,"SELECT * FROM productos WHERE foto='$foto'");
          //MIRA LA FILA Y LA EVALUA la foto
          if(mysqli_num_rows($verificar_foto)>0){
              echo '
                  <script>
                      alert("Esta foto ya esta registrado, intenta con otro diferente")
                      window.location ="registro_tienda.php";
                  </script>
              ';
              exit();
          }
    $ejecutar = mysqli_query($conexion, $query);          
//Ejecutamos la accion de la conexion y le damos una condicion 
if($ejecutar){
    echo'
    |
        <script>alert("productos  almacenado exitosamente");
        window.location ="registro_tienda.php";
        </script>
    
    ';
    
}else{
    echo'
    
        <script>alert("Intentalo de nuevo");
        window.location ="registro_tienda.php";
        </script>
    
    ';
}
//Aqui cerramos la conexion //
mysqli_close($conexion);
?>
