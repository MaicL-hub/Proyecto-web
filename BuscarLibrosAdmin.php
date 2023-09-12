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
<nav class="nav">
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

  <?php
// Conexión a la base de datos
include 'conexion.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    // Consulta a la base de datos
    $sql = "SELECT * FROM libros WHERE id = $id";
    $result = mysqli_query($con, $sql);

    // Desplegar lista de libros
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Portada</th><th>Título</th><th>Autor</th><th>Editorial</th><th>Género</th><th>Precio</th><th>Páginas</th><th>ISBN</th><th>Fecha de Publicación</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["portada"] . "</td><td>" . $row["titulo"] . "</td><td>" . $row["autor"] . "</td><td>" . $row["editorial"] . "</td><td>" . $row["genero"] . "</td><td>" . $row["precio"] . "</td><td>" . $row["paginas"] . "</td><td>" . $row["isbn"] . "</td><td>" . $row["fechaPubli"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron libros con el ID proporcionado.";
    }
} else {
    // Código para mostrar la lista completa de libros
}

// Cerrar conexión
$con->close();
?>
</body>
                