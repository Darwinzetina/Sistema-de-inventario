<?php
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$cantidad = $_POST['cantidad'];
$observaciones = $_POST['observaciones'];
$categoria = $_POST['categoria'];
$img = $_FILES['imagen'];

include '_db.php';
$conexion=conexion();

if($img['size']==0){
    #modificar solo datos pero no imagen
    $query=editarArchivo($conexion,$id,$nombre,$marca,$modelo,$color,$cantidad,$observaciones,$categoria);
    header("location:../views/usuarios/articulos.php");

}
$tmp_name=$img['tmp_name'];
$contenido_archivo=file_get_contents($tmp_name);
$imagen=addslashes($contenido_archivo);

if($img['size']>0){
    #modificar todo
    $query=editar($conexion,$id,$nombre,$marca,$modelo,$color,$cantidad,$observaciones,$categoria,$imagen);
    header("location:../views/usuarios/articulos.php");
}
?>