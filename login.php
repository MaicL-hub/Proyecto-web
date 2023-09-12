<?php
include 'conexion.php';

// Verificación del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) == 1) {
        $fila = mysqli_fetch_assoc($resultado);
        // Si se encontró un usuario con las credenciales dadas, se redirige a la página de inicio o a la página de administrador
        if ($fila['administrador'] == 0) {
            header("Location: index.html");
            exit();
        } else {
            header("Location: Admin.html");
            exit();
        }
    } else {
        // Si no se encontró un usuario con las credenciales dadas, se muestra un mensaje de error
}
}