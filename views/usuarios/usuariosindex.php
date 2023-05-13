
<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_sesion/editar.php' ?>
<?php require '../../includes/_header.php' ?>
<body oncontextmenu="return false" onkeydown="return false">
  
<div id= "content">
        <section>
        <div class="container mt-5">
<div class="row">
<div class="col-sm-12 mb-3">
<center><h1>Información de sesión actual</h1></center>
</div>
<div class="col-sm-12">
<div class="table-responsive">


<table class="table table-striped table-hover">
<thead>

<tr>
<th><center>Nombre</center></th>
<th><center>Teléfono</center></th>
<th><center>Correo</center></th>
<th><center>Contraseña</center></th>
<th><center>registro</center></th>


</tr>

</thead>

<tbody>

<?php

$sql = "SELECT  * FROM acceso WHERE usuario ='$actualsesion'";
$usuarios = mysqli_query($conexion, $sql);
if($usuarios -> num_rows > 0){
foreach($usuarios as $key => $row ){




?>
<tr>
<td><center><?php echo $row['usuario']; ?></center></td>
<td><center><?php echo $row['telefono']; ?></center></td>
<td><center><?php echo $row['correo']; ?></center></td>
<td><center>*************</center></td>
<td><center><?php echo $row['registro']; ?></center></td>
</tr>


<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="4">No existe registros</td>
    </tr>

    <?php
}?>
</tbody>

</table>
</div>
</div>
</div>
</div>
        </section>


        <section>
            <div class= "container">
                <div class= "row">
                    <div class= "col-lg-9">
            </div>
        </section>
    </div>
    
    <?php require '../../includes/_footer.php' ?>
    </body>

</html>