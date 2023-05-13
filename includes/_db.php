<?php
function conexion(){
    $con=mysqli_connect('localhost','root','12345','inventario');
    return $con;
}
function listar($conexion){
    $sql="SELECT * FROM articulos";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function datos($conexion,$id){
    $sql="SELECT * FROM articulos WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    $datos=mysqli_fetch_assoc($query);
    return $datos;
}
function historial($conexion){
    $sql="SELECT * FROM historial";
    $query=mysqli_query($conexion,$sql);
    return $query;
}

function editarArchivo($conexion,$id,$nombre,$marca,$modelo,$color,$cantidad,$observaciones,$categoria){
    $sql="UPDATE articulos SET nombre='$nombre',marca='$marca',modelo='$modelo',color='$color',cantidad='$cantidad',observaciones='$observaciones',categoria='$categoria' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editar($conexion,$id,$nombre,$marca,$modelo,$color,$cantidad,$observaciones,$categoria,$imagen){
    $sql="UPDATE articulos SET nombre='$nombre',marca='$marca',modelo='$modelo',color='$color',cantidad='$cantidad',observaciones='$observaciones',categoria='$categoria',imagen='$imagen' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
?>