<?php
    //incluimos la conexion 
    
    include 'conexion_be.php';
    $conexion = mysqli_connect("localhost","root","","login_register");

    // variables

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $foto = $_POST['foto'];
    $categoria =$_POST['categoria'];
    $query = "INSERT INTO plato (nombre,precio,foto,categoria,tienda_id)VALUES('$nombre','$precio','$foto','$categoria','1')";

    //verificar q el usuario no se repita en la base de datos
    $verificar_nombre =mysqli_query ($conexion,"SELECT * FROM plato WHERE nombre='$nombre'");
    //MIRA LA FILA Y LA EVALUA DE usuario
    if(mysqli_num_rows($verificar_nombre)>0){
        echo '
            <script>
                alert("Este nombre ya esta registrado, intenta con otro diferente")
                window.location ="registro_plato.php";
            </script>
        ';
        exit();
    }
    

 
          //verificar q la foto no se repita en la base de datos
          $verificar_foto =mysqli_query ($conexion,"SELECT * FROM plato WHERE foto='$foto'");
          //MIRA LA FILA Y LA EVALUA la foto
          if(mysqli_num_rows($verificar_foto)>0){
              echo '
                  <script>
                      alert("Esta foto ya esta registrado, intenta con otro diferente")
                      window.location ="registro_plato.php";
                  </script>
              ';
              exit();
          }
    $ejecutar = mysqli_query($conexion, $query);          
//Ejecutamos la accion de la conexion y le damos una condicion 
if($ejecutar){
    echo'
    |
        <script>alert("tiendas  almacenado exitosamente");
        window.location ="registro_plato.php";
        </script>
    
    ';
    
}else{
    echo'
    
        <script>alert("Intentalo de nuevo");
        window.location ="registro_plato.php";
        </script>
    
    ';
}
//Aqui cerramos la conexion //
mysqli_close($conexion);
?>
