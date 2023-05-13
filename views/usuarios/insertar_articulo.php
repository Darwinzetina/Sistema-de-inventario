<?php
//insertar datos en la tabla //
$conexion = mysqli_connect("localhost", "root", "12345", "inventario");
$conexion -> set_charset("utf8");
$time=time();
//registrar datos
if(isset($_POST["agregar"])){
  $nombre = mysqli_real_escape_string($conexion,$_POST['nombre']);
  $marca = mysqli_real_escape_string($conexion,$_POST['marca']);
  $modelo = mysqli_real_escape_string($conexion,$_POST['modelo']);
  $color = mysqli_real_escape_string($conexion,$_POST['color']);
  $cantidad = mysqli_real_escape_string($conexion,$_POST['cantidad']);
  $observaciones = mysqli_real_escape_string($conexion,$_POST['observaciones']);
  $categoria = mysqli_real_escape_string($conexion,$_POST['categoria']);
  $imagen = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
  
   
    $sql = "INSERT INTO articulos(nombre, marca, modelo, color, cantidad, observaciones, categoria, imagen) 
    VALUES('$nombre', '$marca', '$modelo', '$color', '$cantidad', '$observaciones', '$categoria','$imagen')";
    $rta = $conexion->query($sql);
}
header("Location:articulos.php");
?>