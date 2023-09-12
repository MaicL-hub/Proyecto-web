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
  <form method="POST" action="EditarLibrosAdmin.php" class="form">
    <h1 class="title">Editar Libros</h1>
  
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

    <div class="inputContainer">
        <input type="text" class="input" name="portada" placeholder="Portada">
        <label for="" class="label">Portada</label>
    </div>
  
    <div class="inputContainer">
        <input type="text" class="input" name="titulo" placeholder="Título">
        <label for="" class="label">Título</label>
    </div>
  
    <div class="inputContainer">
        <input type="text" class="input" name="autor" placeholder="Autor">
        <label for="" class="label">Autor</label>
    </div>
  
    <div class="inputContainer">
        <input type="text" class="input" name="editorial" placeholder="Editorial">
        <label for="" class="label">Editorial</label>
    </div>
  
    <div class="inputContainer">
        <input type="text" class="input" name="genero" placeholder="Género">
        <label for="" class="label">Género</label>
    </div>
  
    <div class="inputContainer">
        <input type="number" class="input" name="precio" placeholder="Precio">
        <label for="" class="label">Precio</label>
    </div>
  
    <div class="inputContainer">
        <input type="number" class="input" name="paginas" placeholder="Páginas">
        <label for="" class="label">Páginas</label>
    </div>
  
    <div class="inputContainer">
        <input type="text" class="input" name="isbn" placeholder="ISBN">
        <label for="" class="label">ISBN</label>
    </div>
  
    <div class="inputContainer">
        <input type="date" class="input" name="fechaPubli" placeholder="Fecha de Publicación">
        <label for="" class="label">Fecha de Publicación</label>
    </div>
  
    <input type="submit" class="submitBtn" value="Editar libro">
</form>
</div>
</body>