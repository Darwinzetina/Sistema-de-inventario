<?php
$conexion = mysqli_connect("localhost", "root", "12345", "inventario");
$id = $_POST['id'];
$consulta = "DELETE FROM historial WHERE id = $id";
mysqli_query($conexion, $consulta);
header("Location:historial.php");
?>
