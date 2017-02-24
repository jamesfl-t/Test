<?php
	$serverdb= "localhost";
	$userdb= "root";
	$passdb= "";
	$namedb= "test";
	$conexion = new mysqli($serverdb, $userdb, $passdb, $namedb);

	if($conexion -> connect_errno){
		echo "fallo conexión";
	}else{
		echo "conexión con la base de datos exitosa";
	};
?>