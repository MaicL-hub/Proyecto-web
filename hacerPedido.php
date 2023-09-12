<?php
include 'conexion.php';
$carritoId = $_GET['id'];

// Obtener los datos del carrito
$sql = "SELECT * FROM carritos WHERE id = $carritoId";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Obtener las fechas y los valores del pedido del carrito
    $fechaPedido = $row['fechaPedido'];
    $fechaEntrega = $row['fechaEntrega'];
    $descuentos = $row['descuentos'];
    $subtotal = $row['subtotal'];

    // Calcular el total
    $total = $subtotal - $descuentos;

    // Establecer el estado de envío y el costo de envío
    $estadoEnvio = "enviado";
    $costoEnvio = 0;

    // Insertar el pedido en la tabla "pedidos"
    $sql = "INSERT INTO pedidos (id, fechaPedido, fechaEntrega, estadoPedido, total, costoEnvio) VALUES (0, '$fechaPedido', '$fechaEntrega', '$estadoEnvio', '$total', '$costoEnvio')";
    $resultado = mysqli_query($con, $sql);

    //
    // *** To Email ***
    $to = 'a20310030@ceti.mx';
    //
    // *** Subject Email ***
    $subject = 'Pedido recibido';
    //
    // *** Content Email ***
    $content = "Pedido:\nFecha pedido: " . $fechaPedido . "\nFecha entrega: " . $fechaEntrega . "\nEstado pedido: " . $estadoEnvio . "\nTotal: " . $total . "$";
    //
    //*** Head Email ***
    $headers = "From: mikylopezesparza@gmail.com\r\n";
    //

mail($to, $subject, $content, $headers);

$sql = "DELETE FROM carritos WHERE id = $carritoId";
$resultado = mysqli_query($con, $sql);
mysqli_close($con);

if ($resultado) {
    header("Location: Carrito.php");
    exit();
} else {
    echo "Error al crear el pedido";
}
} else {
    echo "No se encontró el carrito con el ID proporcionado.";
}
?>