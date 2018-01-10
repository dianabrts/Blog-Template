<?php
	// INDEX DE ADMIN
	
	session_start();

	require 'config.php';
	require '../functions.php';

	$conexion = conexion($bdConfig);

	comprobarSesion();

	if (!$conexion) {
		header('Location: ../error.php');
	}

	$posts = getPosts($blogConfig['postPorPagina'],$conexion);

	require '../Views/adminIndex.view.php';	
?>