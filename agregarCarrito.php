<?php
include 'conexion.php';
session_start();
// Comprobar si la sesión ha sido iniciada
if (session_status() === PHP_SESSION_NONE) {
    header("Location: Login.html");
}else{
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    
    $fechaPedido = date("Y-m-d"); // Fecha actual
    $fechaEntrega = date('Y-m-d', strtotime('+1 week')); // Fecha de entrega dentro de una semana
    $descuentos = 0;
    $subtotal = $cantidad * $precio;
    $impuestos = $subtotal * 0.21;
    
    $sql=mysqli_query($con, "INSERT INTO carritos (id, fechaPedido, fechaEntrega, descuentos, subtotal, impuestos) VALUES (0, '$fechaPedido', '$fechaEntrega', '$descuentos', '$subtotal', '$impuestos')");
    mysqli_close($con);
    
    header("Location: Productos.php");

}


?>