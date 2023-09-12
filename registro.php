<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$fNacimiento = $_POST['fNacimiento'];
$infoPago = $_POST['infoPago'];

$sql=mysqli_query($con, "INSERT INTO usuarios (id, nombre, correo, contrasena, direccion, telefono, fNacimiento, infoPago, administrador) values (0,'$nombre','$correo','$contrasena','$direccion','$telefono','$fNacimiento','$infoPago', 0)");


header("Location: index.html");
?>