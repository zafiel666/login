<?php
$usuario = "root";
$contrasena = "";
$nombre_bd = "db_concesionaria";

$conexion = mysqli_connect("localhost", "root", "", "db_concesionaria");

try {
	$bd = new PDO (
		'mysql:host=localhost;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena
	);
} catch (Exception $e) {
	echo "Problema con la conexión: ".$e->getMessage();
}

?>