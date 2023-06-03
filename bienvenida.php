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
    <title>Bienvenido</title>
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

        h1, h2, h3 {
            text-align: center;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .table {
            margin: 0 auto;
            color: #fff;
        }

        .table th, .table td {
            text-align: center;
        }

        .pagination {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Bienvenido a las tiendas</h1>
        <a href="php/cerrar_sesion.php" class="btn btn-primary logout-btn">Cerrar sesión</a>

        <?php
        // Paginación
        $elementosPorPagina = 10; // Define el número de elementos por página
        $paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1; // Obtiene la página actual desde la URL

        // Obtener la cantidad total de tiendas
        $conexion = mysqli_connect("localhost", "root", "", "login_register");
        $sqlCount = "SELECT COUNT(*) AS total FROM tiendas";
        $queryCount = mysqli_query($conexion, $sqlCount);
        $row = mysqli_fetch_assoc($queryCount);
        $totalElementos = $row['total'];

        // Calcular la cantidad total de páginas
        $totalPaginas = ceil($totalElementos / $elementosPorPagina);

        // Calcular el índice inicial del primer elemento en la página actual
        $indiceInicial = ($paginaActual - 1) * $elementosPorPagina;

        // Obtener las tiendas paginadas y ordenadas alfabéticamente
        $sql = "SELECT id, nombre, foto FROM tiendas ORDER BY nombre ASC LIMIT $indiceInicial, $elementosPorPagina";

        // Buscador de tiendas
        if (isset($_GET['buscar'])) {
            $busqueda = $_GET['buscar'];
            $sql = "SELECT id, nombre, foto FROM tiendas WHERE nombre LIKE '%$busqueda%' ORDER BY nombre ASC LIMIT $indiceInicial, $elementosPorPagina";
        }

        $query = mysqli_query($conexion, $sql);
        ?>

        <h2>Menú</h2>
        <form class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar tiendas" name="buscar">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </div>
        </form>

        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        
                        <th>Nombre</th>
                        <th>Foto</th>
                     
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><a href="categorias.php?restaurante=<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></a></td>
                            <td><img src="php/img2/"<?php echo $row['foto']; ?>" width="50px"></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="pagination">
            <?php
            // Generar enlaces de paginación
            for ($i = 1; $i <= $totalPaginas; $i++) {
                echo ' <a href="?pagina=' . $i . '" class="btn btn-primary"> actualizar' . $i . '</a>';
            }
            ?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>