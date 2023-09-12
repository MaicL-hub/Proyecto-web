<?php
include 'conexion.php';

$id = $_POST['id'];
$portada = $_POST['portada'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$genero = $_POST['genero'];
$precio = $_POST['precio'];
$paginas = $_POST['paginas'];
$isbn = $_POST['isbn'];
$fechaPubli = $_POST['fechaPubli'];

$sql = "UPDATE libros SET portada = '$portada', titulo = '$titulo', autor = '$autor', editorial = '$editorial', genero = '$genero', precio = '$precio', paginas = '$paginas', isbn = '$isbn', fechaPubli = '$fechaPubli' WHERE id = '$id'";
$resultado = mysqli_query($con, $sql);

mysqli_close($con);

if ($resultado) {
    header("Location: librosAdmin.php");
    exit();
} else {
    echo "Error al actualizar los datos";
}
?>