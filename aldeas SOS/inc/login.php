<?php 
	session_start();

	//conexion

	require('conexion.php'); 

	//asignar las variables
	$usuarios=$_POST['usuario'];
	$pass=$_POST['password'];
	
	//sentencia
	$consulta="SELECT * FROM usuarios";
	$resultado=$mysqli->query($consulta);
	
	//condicion
	while ($fila=$resultado->fetch_assoc()) {
		//capturar los campos de usuario y contraseña de la BD
		$u=$fila['user'];
		$c=$fila['pass'];
		if($usuarios==$u & $pass==$c){
			//el usuariodel formulario es igual al usuario de la BD
			//asigna las variables de sesion
			$_SESSION['usuario']=$usuarios;
			$_SESSION['password']=$pass;

			header("Location: ../admin.php");
			exit();
		}


	}


 ?>