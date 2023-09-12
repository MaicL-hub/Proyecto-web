<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$fNacimiento = $_POST['fNacimiento'];
$infoPago = $_POST['infoPago'];
$administrador = $_POST['administrador'];

$sql=mysqli_query($con, "INSERT INTO usuarios (id, nombre, correo, contrasena, direccion, telefono, fNacimiento, infoPago, administrador) VALUES (0, '$nombre', '$correo', '$contrasena', '$direccion', '$telefono', '$fNacimiento', '$infoPago', '$administrador')");
mysqli_close($con);

header("Location: UsuariosAdmin.php");
?>