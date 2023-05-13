<!DOCTYPE html>
<html lang="es-MX">
<?php $conexion = mysqli_connect("localhost", "root", "12345", "inventario"); ?>
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body oncontextmenu="return false" onkeydown="return false">

<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form name="form1" action="insertar_articulo.php" method="POST"  enctype="multipart/form-data">

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="nombre" class="form-label">Nombre *</label>
<input type="text"  id="nombre" name="nombre" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="marca" class="form-label">Marca *</label>
<input type="text"  id="marca" name="marca" class="form-control" required >
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="modelo" class="form-label">Modelo *</label>
<input type="text"  id="modelo" name="modelo" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="color" class="form-label">Color *</label>
<input type="text"  id="color" name="color" class="form-control" required>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="cantidad" class="form-label">Cantidad *</label>
<input type="number"  id="cantidad" name="cantidad" class="form-control" required>
</div>
</div>

<div class="col-sm-6">

<div class="mb-3">
<label for="observaciones" class="form-label">Observaciones *</label>
<textarea class="form-control" id="observaciones" name="observaciones" maxlength="30" rows="2" required></textarea> 
</div>

</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="categoria" class="form-label">Categorias *</label>
<select name="categoria" id="categoria" class="form-control" required>
<option disabled selected="">Selecciona una categoría</option>
<?php
$resultado = mysqli_query($conexion,"SELECT * FROM categorias order by id asc");

while ($valores = $resultado->fetch_assoc()):
    $id = $valores ['id'];
    $nombre = $valores ['nombre'];
    echo "<option value=$nombre>$nombre</option>";
endwhile;
?>
</select>
    </div>   
</div>
</div>
<div class="mb-3">
<div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <input type="file" class="form-control-file" name="foto" id="foto" required>
            </div>
        </div>
    </div>
</div>

<div class="mb-3">
<button type="submit" name="agregar" class="btn btn-success">Guardar</button>
</div>
</form>
</div>
</div>
</body>
<?php require '../../../includes/_footer.php' ?>
</html>