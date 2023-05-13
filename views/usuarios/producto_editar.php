<?php

$id = $_GET['id'];

require_once "../../includes/_sesion/editar.php";
$consulta = "SELECT * FROM articulos WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$productos = mysqli_fetch_assoc($resultado);


?>

<!DOCTYPE html>
<html lang="en">

<?php require '../../includes/_header.php' ?>
<body>

<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form action="../../includes/_functions.php" method="POST"  enctype="multipart/form-data" >

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="nombre" class="form-label">Nombre *</label>
<input type="text"  id="nombre" name="nombre" value="<?php echo $productos ['nombre']; ?>" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="marca" class="form-label">Marca *</label>
<input type="text"  id="marca" name="marca" value="<?php echo $productos ['marca']; ?>" class="form-control" required>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="modelo" class="form-label">Modelo *</label>
<input type="text"  id="modelo" name="modelo" value="<?php echo $productos ['modelo']; ?>"  class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="color" class="form-label">Color *</label>
<input type="text"  id="color" name="color"  value="<?php echo $productos ['color']; ?>" class="form-control" required>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="cantidad" class="form-label">Cantidad *</label>
<input type="number"  id="cantidad" name="cantidad"  value="<?php echo $productos ['cantidad']; ?>" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="observaciones" class="form-label">Observaciones *</label>
<textarea class="form-control" id="observaciones" name="observaciones" maxlength="30" rows="2" required><?php echo $productos ['observaciones']; ?></textarea> 
</div>

</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="categoria" class="form-label">Categoria *</label>
<select name="categoria" id="categoria" class="form-control" required>
<option selected=""><?php echo $productos ['categoria']; ?></option>
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
                <input type="file" class="form-control-file"  name="imagen" id="imagen">
            </div>
        </div>
    </div>
</div>

<div class="mb-3">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<button type="submit" class="btn btn-success">Guardar</button>
</div>
</form>
</div>
</div>
</body>
<?php require '../../includes/_footer.php' ?>
</html>