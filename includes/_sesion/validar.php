<?php
//Validacion de datos para poder iniciar sesión
require_once ("../_db.php");
$correo=$_POST['correo'];
//$password=$_POST['password'];
$password=md5($_POST["password"]);
session_start();
$_SESSION['correo']=$correo;

$conexion=mysqli_connect("localhost","root","12345","inventario");
$consulta="SELECT*FROM acceso where usuario='$correo' and pass='$password'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
  
    header('Location: ../../views/usuarios/index.php');

}else{
    
    header('location: ../../index.php');
    session_destroy();
}
?>





