<?php
include("../../includes/_sesion/editar.php");
$buscador=mysql_query("SELECT * FROM articulos WHERE nombre LIKE LOWER('%".$_POST["buscar"]."%') ");
$numero=mysql_num_rows($buscador);
?>

<?php
while($resultado = mysql_fetch_assoc($buscador)){ ?>

<?php echo $resultado["nombre"];?>

<?php } ?>