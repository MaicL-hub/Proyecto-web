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
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        $result = mysqli_query($con, $sql);

        // Desplegar lista de usuarios
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Contraseña</th><th>Dirección</th><th>Teléfono</th><th>Fecha de Nacimiento</th><th>Información de Pago</th><th>Administrador</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["correo"] . "</td><td>" . $row["contrasena"] . "</td><td>" . $row["direccion"] . "</td><td>" . $row["telefono"] . "</td><td>" . $row["fNacimiento"] . "</td><td>" . $row["infoPago"] . "</td><td>" . $row["administrador"];
            }
            echo "</table>";
        } else {
            echo "No se encontraron usuarios con el ID proporcionado.";
        }
    } else {
       
    }

    // Cerrar conexión
    $con->close();
    ?>
</body>
                