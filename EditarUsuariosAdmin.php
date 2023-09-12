<?php
include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$fNacimiento = $_POST['fNacimiento'];
$infoPago = $_POST['infoPago'];
$administrador = $_POST['administrador'];

$sql = "UPDATE usuarios SET nombre = '$nombre', correo = '$correo', contrasena = '$contrasena', direccion = '$direccion', telefono = '$telefono', fNacimiento = '$fNacimiento', infoPago = '$infoPago', administrador = '$administrador' WHERE id = '$id'";
$resultado = mysqli_query($con, $sql);

mysqli_close($con);

if ($resultado) {
    header("Location: UsuariosAdmin.php");
    exit();
} else {
    echo "Error al actualizar los datos";
}
?>