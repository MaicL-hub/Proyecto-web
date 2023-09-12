<?php
include 'conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($con, $sql);

mysqli_close($con);

if ($resultado) {
    header("Location: UsuariosAdmin.php");
    exit();
} else {
    echo "Error al eliminar el registro";
}
?>