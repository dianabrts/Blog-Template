<?php
	session_start();

	require 'config.php';
	require '../functions.php';

	comprobarSesion();

	$conexion = conexion($bdConfig);

	if (!$conexion) {
		header('Location: ../error.php');
	}

	$id = limpiarDatos($_GET['id']);

	if (!$id) {
		header('Location: ' . RUTA . 'Admin');
	}

	$statement = $conexion->prepare('DELETE FROM articulos WHERE id = :id');

	$statement->execute(array(':id' => $id));

	header('Location: ' . RUTA . 'Admin');
?>