<?php
$conexion = mysqli_connect("localhost", "root", "12345", "inventario");
$id = $_POST['id'];
$consulta = "DELETE FROM articulos WHERE id = $id";
mysqli_query($conexion, $consulta);
header("Location:articulos.php");
?>
