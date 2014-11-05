<?php 
require('conexion.php');

$nombre=$_POST['usuario'];
$correo=$_POST['mail'];
$pass=$_POST['password'];

$consulta="INSERT INTO usuarios(user, pass, mail) VALUES ('$nombre','$pass', '$correo')";
$resultado =$mysqli->query($consulta);
//nos permite direccionar la pagina automaticamente
header("Location: ../user control.php");
exit();
?>
