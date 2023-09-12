<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Style.css">
  <title>Lista de Usuarios</title>
</head>
<body>
<<nav class="nav">
    <div class="nav">
      <ul>
        <li class="nav-item">
          <a class="nav-link" href="UsuariosAdmin.php">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="LibrosAdmin.php">Libros</a>
        </li>
      </ul>
    </div>
  </nav>
  <body>
  <form action="AgregarLibrosAdmin.html">
    <input type="submit" class="submitBtn" value="Agregar">
</form>
<p></p>
<form method="POST" action="BuscarLibrosAdmin.php">
    <input type="submit" class="submitBtn" value="Buscar">
    <div class="inputContainer">
        <input type="number" name="id">
        <label for="" class="label"></label>
    </div>
</form>
<p></p>

<?php
// Conexión a la base de datos
include 'conexion.php';

// Consulta a la base de datos
$sql = "SELECT id, titulo, autor, isbn FROM libros";
$result = $con->query($sql);

// Desplegar lista de libros
echo "<table>";
echo "<tr><th>ID</th><th>Título</th><th>Autor</th><th>ISBN</th><th>Acciones</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["titulo"] . "</td><td>" . $row["autor"] . "</td><td>" . $row["isbn"] . "</td><td>";
    echo '<a href="editarLibro.php?id=' . $row["id"] . '">Editar</a> ';
    echo '<a href="eliminarLibro.php?id=' . $row["id"] . '">Eliminar</a>';
    echo "</td></tr>";
}
echo "</table>";

// Cerrar conexión
$con->close();
?>
</body>