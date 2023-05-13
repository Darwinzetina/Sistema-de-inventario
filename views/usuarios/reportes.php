<!DOCTYPE html>
<html lang="en">

<?php include '../../includes/_header.php';
$conexion = mysqli_connect("localhost", "root", "12345", "inventario");
?>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>login</title>
<link rel="stylesheet" href="../../css/reportes.css">
</head>
<body oncontextmenu="return false" onkeydown="return false">
<form  action="generar_reporte.php" method="POST" target="_blank">
<div id="login" >
<div class="container">
<div id="login-row" class="row justify-content-center align-items-center">
<div id="login-column" class="col-md-6">
<div id="login-box" class="col-md-12">
<form id="login-form" class="form" action="" method="post">
<h3 class="text-center">Selecciona una categoría</h3>
<div class="form-group">
<div class="row">
<div class="col-sm-12">
<div class="mb-3">
<label for="categoria" class="form-label">Categorías</label>
<select name="categoria" id="categoria" class="form-control" required>
<option disabled selected="" required>Selecciona una categoría</option>
<optgroup label="Categorías">
<?php
$resultado = mysqli_query($conexion,"SELECT * FROM categorias order by id asc");

while ($valores = $resultado->fetch_assoc()):
$id = $valores ['id'];
$nombre = $valores ['nombre'];
echo "<option value=$nombre>$nombre</option>";
endwhile;
?>
</optgroup>
<optgroup label="Generar el reporte de todos los artículos">
<option>Todos</option>
</optgroup>
</select>
</div>   
</div>
</div>
</div>

<div class="form-group">
<br>
<input type="submit"class="btn btn-success btn-md space" value="Generar reporte">
<div id="register-link" class="text-right">
<br>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</form>
</body>
</html>