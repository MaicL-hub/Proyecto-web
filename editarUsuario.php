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
  <div class="Registro">
    <form method="POST" action="EditarUsuariosAdmin.php" class="form">
        <h1 class="title">Editar Usuarios</h1>
      
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

        <div class="inputContainer">
          <input type="text" class="input" name="nombre" placeholder="Nombre">
          <label for="" class="label">Nombre</label>
        </div>
      
        <div class="inputContainer">
          <input type="text" class="input" name="correo" placeholder="ejemplo@gmail.com">
          <label for="" class="label">Correo electrónico</label>
        </div>
      
        <div class="inputContainer">
          <input type="text" class="input" name="contrasena" placeholder="********">
          <label for="" class="label">Contraseña</label>
        </div>
      
        <div class="inputContainer">
          <input type="text" class="input" name="direccion" placeholder="Dirección">
          <label for="" class="label">Dirección</label>
        </div>
      
        <div class="inputContainer">
          <input type="number" class="input" name="telefono" placeholder="3365465493">
          <label for="" class="label">Teléfono</label>
        </div>
      
        <div class="inputContainer">
          <input type="date" class="input" name="fNacimiento" placeholder="19/09/1999">
          <label for="" class="label">Fecha de Nacimiento</label>
        </div>
      
        <div class="inputContainer">
          <input type="text" class="input" name="infoPago" placeholder="134-6555734-54">
          <label for="" class="label">Información de pago</label>
        </div>
      
        <div class="inputContainer">
          <input type="number" class="input" name="administrador" placeholder="0/1">
          <label for="" class="label">Administrador</label>
        </div>
      
        <input type="submit" class="submitBtn" value="Editar perfil">
      </form>
  </div>
</body>