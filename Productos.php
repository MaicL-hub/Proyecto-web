<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La cocoteca</title>
    <link rel="stylesheet" href="Style.css">
</head>
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
<body>
<section class="productos">
<?php
    // Conexión a la base de datos
    include 'conexion.php';

    // Consulta a la base de datos
    $sql = "SELECT * FROM libros";
    $result = $con->query($sql);

    // Desplegar lista de libros
    while($row = $result->fetch_assoc()) {
        echo '<div class="producto">';
        echo '<img src="' . $row["portada"] . '" alt="' . $row["titulo"] . '">';
        echo '<p class="producto-titulo">' . $row["titulo"] . '</p>';
        echo '<p class="producto-precio">$' . $row["precio"] . '</p>';
        echo '<a href="detallelibro.php?id=' . $row["id"] . '" class="boton">Ver más</a>';
        echo '</div>';
    }

    // Cerrar conexión
    $con->close();
    ?>
</section>


  </body>
<footer class="footer">
    <div class="footer-content">
      <p class="footer-text">La cocoteca</p>
      <ul class="redes-sociales">
        <li class="redes-sociales-item">
          <a href="https://www.facebook.com/">
            <img src="facebook.png" alt="Facebook">
            <span>@Facebook</span>
          </a>
        </li>
        <li class="redes-sociales-item">
          <a href="https://twitter.com/">
            <img src="twitter.png" alt="Twitter">
            <span>@Twitter</span>
          </a>
        </li>
        <li class="redes-sociales-item">
          <a href="https://www.instagram.com/">
            <img src="instagram.png" alt="Instagram">
            <span>@Instagram</span>
          </a>
        </li>
      </ul>
    </div>
  </footer>
</html>