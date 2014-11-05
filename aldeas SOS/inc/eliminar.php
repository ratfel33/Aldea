<?php 
	require('conexion.php');

	$id=$_GET['id'];
	$consulta="DELETE FROM usuarios WHERE Id='$id'";
	$resultado=$mysqli->query($consulta);
	
	//nos permite direccionar la pagina automaticamente
	header("Location: ../user control.php");
	exit();

 ?>