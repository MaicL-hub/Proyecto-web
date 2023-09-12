<?php
include 'conexion.php';

$portada = $_POST['portada'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$genero = $_POST['genero'];
$precio = $_POST['precio'];
$paginas = $_POST['paginas'];
$isbn = $_POST['isbn'];
$fechaPubli = $_POST['fechaPubli'];

$sql=mysqli_query($con, "INSERT INTO libros (id, portada, titulo, autor, editorial, genero, precio, paginas, isbn, fechaPubli) VALUES (0, '$portada', '$titulo', '$autor', '$editorial', '$genero', '$precio', '$paginas', '$isbn', '$fechaPubli')");
mysqli_close($con);

header("Location: librosAdmin.php");
?>