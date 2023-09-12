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
<?php
    // Conexión a la base de datos
    include 'conexion.php';

    // Consulta a la base de datos
    $sql = "SELECT fechaPedido, fechaEntrega, estadoPedido, total, costoEnvio FROM pedidos";
    $result = $con->query($sql);

    // Desplegar lista de pedidos
    echo "<table>";
    echo "<tr><th>Fecha de Pedido</th><th>Fecha de Entrega</th><th>Estado del Pedido</th><th>Total</th><th>Costo de Envío</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["fechaPedido"] . "</td>";
        echo "<td>" . $row["fechaEntrega"] . "</td>";
        echo "<td>" . $row["estadoPedido"] . "</td>";
        echo "<td>" . $row["total"] . "</td>";
        echo "<td>" . $row["costoEnvio"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    // Cerrar conexión
    $con->close();
?>
</body>
</html>