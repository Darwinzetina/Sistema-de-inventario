<?php

$id = $_GET['id'];
require_once ("../../includes/_db.php");
$consulta = "SELECT * FROM usuarios WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$usuario = mysqli_fetch_assoc($resultado);


?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>

<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form action="../../includes/_functions.php" method="POST">
<div class="mb-3">
<label for="nombre" class="form-label">Nombre *</label>
<input type="text"  id="nombre" name="nombre" class="form-control"
value="<?php echo $usuario ['nombre']; ?>">
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="correo" class="form-label">Correo electronico *</label>
<input type="email"  id="correo" name="correo" class="form-control"
value="<?php echo $usuario ['correo']; ?>">
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="password" class="form-label">Password *</label>
<input type="password"  id="password" name="password" class="form-control"
value="<?php echo $usuario ['password']; ?>">
</div>
</div>
</div>

<div class="mb-3">
<label for="telefono" class="form-label">Telefono *</label>
<input type="tel"  id="telefono" name="telefono" class="form-control"
value="<?php echo $usuario ['telefono']; ?>">
<input type="hidden" name="accion" value="editar_usuario">
<input type="hidden" name="id" value="<?php echo $id;?>">
</div>

<div class="mb-3">
<button type="submit" class="btn btn-success">Editar</button>


</div>

</form>
</div>
</div>
</body>
</html>