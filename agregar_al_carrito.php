<?php
session_start();

if (isset($_POST['producto_id'])) {
    $productoId = $_POST['producto_id'];
    $usuarioId = $_SESSION['usuario']['id'];

    // Verificar si el producto ya está en el carrito con el estado "pendiente"
    $conexion = mysqli_connect("localhost", "root", "", "login_register");
    $sqlCarrito = "SELECT * FROM pedidos WHERE id = $usuarioId AND producto_id = $productoId";
    $queryCarrito = mysqli_query($conexion, $sqlCarrito);

    if (mysqli_num_rows($queryCarrito) > 0) {
        // El producto ya está en el carrito, no se realiza ninguna acción
        echo "El producto ya está en el carrito.";
    } else {
        // Agregar el producto al carrito con el estado "pendiente"
        $sqlAgregar = "INSERT INTO pedidos (id, producto_id, estado) VALUES ($usuarioId, $productoId, 'pendiente')";
        $queryAgregar = mysqli_query($conexion, $sqlAgregar);

        if ($queryAgregar) {
            echo "Producto agregado al carrito.";
        } else {
            echo "Error al agregar el producto al carrito.";
        }
    }
} else {
    echo "No se recibió ningún ID de producto.";
}
?>