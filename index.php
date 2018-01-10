<?php 
	require 'Admin/config.php';
	require 'functions.php';

	$conexion = conexion($bdConfig);

	if (!$conexion) {
		header('Location: error.php');
	}

	$posts = getPosts($blogConfig['postPorPagina'],$conexion);

	if (!$posts) {
		header('Location: error.php');
	}
	
	require 'Views/index.view.php';
?>