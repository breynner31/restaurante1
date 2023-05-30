<?php
// Incluimos la conexión
include 'conexion_be.php';
$conexion = mysqli_connect("localhost", "root", "", "login_register");

// Variables
$nombre = $_POST['nombre'];
$lugar = $_POST['lugar'];
$foto = $_FILES['foto']['tmp_name'];

// Verificar que el nombre no se repita en la base de datos
$verificar_nombre = mysqli_query($conexion, "SELECT * FROM tiendas WHERE nombre='$nombre'");
if (mysqli_num_rows($verificar_nombre) > 0) {
    echo '
        <script>
            alert("Este nombre ya está registrado, intenta con otro diferente");
            window.location = "registro_tienda.php";
        </script>
    ';
    exit();
}

// Verificar que el lugar no se repita en la base de datos
$verificar_lugar = mysqli_query($conexion, "SELECT * FROM tiendas WHERE lugar='$lugar'");
if (mysqli_num_rows($verificar_lugar) > 0) {
    echo '
        <script>
            alert("Este lugar ya está registrado, intenta con otro diferente");
            window.location = "registro_tienda.php";
        </script>
    ';
    exit();
}

// Guardar la imagen en el servidor
$directorio = 'img/';
$nombreArchivo = $_FILES['foto']['name'];
$rutaArchivo = $directorio . $nombreArchivo;
move_uploaded_file($foto, $rutaArchivo);

// Insertar los datos en la base de datos
$query = "INSERT INTO tiendas(nombre, lugar, foto) VALUES ('$nombre', '$lugar', '$rutaArchivo')";
$ejecutar = mysqli_query($conexion, $query);

// Comprobar si se ejecutó correctamente
if ($ejecutar) {
    echo '
        <script>
            alert("Tienda almacenada exitosamente");
            window.location = "registro_tienda.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Error al almacenar la tienda, inténtalo de nuevo");
            window.location = "registro_tienda.php";
        </script>
    ';
}

// Cerramos la conexión
mysqli_close($conexion);
?>