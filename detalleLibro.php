<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<nav>
    <div class="nav">
    <ul>
        <li class="nav-item">
        <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Productos.php">Productos</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Ubicacion.html">Ubicacion</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Registro.html">Registro</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Login.html">Login</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Carrito.php">Carrito</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Pedidos.php">Pedidos</a>
        </li>
    </ul>
    </div>
</nav>

<section class="producto-detalles">
    <?php
    // Conexión a la base de datos
    include 'conexion.php';

    // Obtener el ID del libro a través del método GET
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Consulta a la base de datos para obtener los detalles del libro
        $sql = "SELECT * FROM libros WHERE id = $id";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="producto">';
                echo '<img src="' . $row["portada"] . '" alt="' . $row["titulo"] . '">';
                echo '<p class="producto-titulo">' . $row["titulo"] . '</p>';
                echo '<p class="producto-autor">Autor: ' . $row["autor"] . '</p>';
                echo '<p class="producto-editorial">Editorial: ' . $row["editorial"] . '</p>';
                echo '<p class="producto-genero">Género: ' . $row["genero"] . '</p>';
                echo '<p class="producto-precio">$' . $row["precio"] . '</p>';
                echo '<p class="producto-paginas">Páginas: ' . $row["paginas"] . '</p>';
                echo '<p class="producto-isbn">ISBN: ' . $row["isbn"] . '</p>';
                echo '<p class="producto-fecha">Fecha de publicación: ' . $row["fechaPubli"] . '</p>';
                echo '<div class="item">';
                echo '<form method="POST" action="agregarCarrito.php">';
                echo '<div class="cantidad">';
                echo '<label for="cantidad">Cantidad:</label>';
                echo '<input type="number" id="cantidad" name="cantidad" min="1" value="1">';
                echo '</div>';
                echo '<input type="hidden" name="precio" value="' . $row["precio"] . '">';
                echo '<button class="submitBtn" type="submit">Agregar al carrito</button>';
                echo '</form>';
                echo '</div>';
            }
        } else {
            echo 'No se encontró el libro con el ID proporcionado.';
        }
    }
    // Cerrar conexión
    $con->close();
    ?>
</section>
</body>
</html>