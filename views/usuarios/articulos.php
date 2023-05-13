<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../../css/search.css">

</head>
<body oncontextmenu="return false" onkeydown="return false">
<div id= "content">
        <section>
        <div class="container mt-5">
<div class="row">
<div class="col-sm-12 mb-3">
<div class="box">
<input onkeyup="buscar_ahora($('#buscar_1').val());" type="text" id="buscar_1" name="buscar_1" placeholder="Buscar" class="src" autocomplete="off">
</div>
<center><h1>Artículos</h1></center>
</div>
<div class="col-sm-14">
<div class="table-responsive" style="overflow: auto; width: 102%; height: 495px">


<table class="table table-striped table-hover">
<thead>

<tr>
<th><center>Id</center></th>
<th><center>Imagen</center></th>
<th>Nombre</th>
<th>Marca</th>
<th>Modelo</th>
<th>Color</th>
<th><center>Cantidad</center></th>
<th>Observaciones</th>
<th>Categoría</th>
<th><center>Acciones</center></th>


</tr>

</thead>

<tbody>

<?php 
include '../includes/_db.php';
$conexion=conexion();
$query=listar($conexion);
$contador=0;
while($datos=mysqli_fetch_assoc($query)){
$contador++;
$id=$datos['id'];
$nombre=$datos['nombre'];
$marca=$datos['marca'];
$modelo=$datos['modelo'];
$color=$datos['color'];
$cantidad=$datos['cantidad'];
$observaciones=$datos['observaciones'];
$categoria=$datos['categoria'];
$imagen=$datos['imagen'];

?>
</style>
<!-- empieza la tabla-->
<tr>
<td><?php echo $id ?></td>
<td><img width="50" src="data:image;base64,<?php echo base64_encode($imagen);?>" ></td>
<td><?php echo $nombre ?></td>
<td><?php echo $marca ?></td>
<td><?php echo $modelo ?></td>
<td><?php echo $color ?></td>

<td><center><?php echo $cantidad ?></center></td>
<td><?php echo $observaciones ?></td>


<td><?php echo $categoria ?></td>


<td>
  <a class="btn btn-small btn-warning" href="producto_editar.php?id=<?php echo $id ?>"><i class="material-icons">edit</i>
    <div">
    </div>
  </a>
  <a href="producto_eliminar.php?id=<?php echo $id ?>" class="btn btn-small btn-danger"><i class="material-icons">delete</i>
    <div">
    </div>
  </a>
</td>
</tr>
<?php 
}
?>
</tbody>

</table>
</div>
</div>
</div>
</div>
        </section>

    </div>
    <?php require '../../includes/_footer.php' ?>

<script type="text/javascript">
        function buscar_ahora(buscar){
        var parametros = {"buscar":buscar};
        $.ajax({
        data:parametros,
        type:'POST',
        url:'buscador.php',
        success: function(data){
        document.getElementById("table-responsive").innerHTML = data;
        }
        });
        }
</html>