<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
        alert("Inicie sesión, por favor verifique los datos introducidos.");
        window.location = "index.php";
    </script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorías</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2f2f2;
            background-image: url("img/technology-background.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 5px;
            padding: 20px;
            margin-top: 50px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logout-btn {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .button1 {
            margin-top: 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .button1:hover {
            background-color: #0056b3;
        }

        h1, h2, h3 {
            text-align: center;
        }

        .table {
            margin: 0 auto;
            color: #fff;
        }

        .table th, .table td {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Categorías</h1>
        <a href="php/cerrar_sesion.php" class="btn btn-primary logout-btn">Cerrar sesión</a>

        <?php
        // Obtener el ID del restaurante desde el parámetro de la URL
        $restauranteId = $_GET['restaurante'];

        // Obtener el nombre del restaurante
        $conexion = mysqli_connect("localhost", "root", "", "login_register");
        $sqlRestaurante = "SELECT nombre FROM tiendas WHERE id = $restauranteId";
        $queryRestaurante = mysqli_query($conexion, $sqlRestaurante);
        $rowRestaurante = mysqli_fetch_assoc($queryRestaurante);
        $nombreRestaurante = $rowRestaurante['nombre'];

        // Obtener los platos relacionados con el restaurante que estén habilitados
        $sqlPlatos = "SELECT * FROM plato WHERE tienda_id = $restauranteId AND estado = 1";
        $queryPlatos = mysqli_query($conexion, $sqlPlatos);
        ?>

        <h2>Categorías de la tienda <?php echo $nombreRestaurante; ?></h2>

        <div class="col-md-8">
            <table class="table">
                <thead class="table-success table-striped">
                    <tr>
                        <th>id</th>
                        <th>nombre</th>
                        <th>precio</th>
                        <th>foto</th>
                        <th>categoria</th>
                        <th>tienda_id</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($rowPlato = mysqli_fetch_array($queryPlatos)) {
                        ?>
                        <tr>
                            <td><?php echo $rowPlato['id']; ?></td>
                            <td><?php echo $rowPlato['nombre']; ?></td>
                            <td><?php echo $rowPlato['precio']; ?></td>
                            <td><?php echo $rowPlato['foto']; ?></td>
                            <td><?php echo $rowPlato['categoria']; ?></td>
                            <td><?php echo $rowPlato['tienda_id']; ?></td>
                            <td>
                                <button class="btn btn-primary add-to-cart" data-id="<?php echo $rowPlato['id']; ?>">Agregar al carrito</button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <button class="button1"><a href="bienvenida.php" style="text-decoration: none; color: #fff;">Inicio</a></button>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Esperar a que el DOM esté cargado
        document.addEventListener("DOMContentLoaded", function() {
            // Obtener todos los botones "Agregar al carrito"
            var addToCartButtons = document.getElementsByClassName("add-to-cart");

            // Agregar un evento de clic a cada botón
            Array.from(addToCartButtons).forEach(function(button) {
                button.addEventListener("click", function() {
                    // Obtener el ID del producto del atributo data-id
                    var productId = this.getAttribute("data-id");

                    // Enviar una solicitud AJAX al servidor para agregar el producto al carrito
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "agregar_al_carrito.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            // La solicitud se completó correctamente
                            alert("Producto agregado al carrito");
                        }
                    };
                    xhr.send("producto_id=" + productId);
                });
            });
        });
    </script>
</body>

</html>