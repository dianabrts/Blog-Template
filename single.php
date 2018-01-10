<?php 
	require 'Admin/config.php';
	require 'functions.php';

	$conexion = conexion($bdConfig);

	$id = idArticulo($_GET['id']);

	if (!$conexion) {
		header('Location: error.php');
	}

	if (empty($id)) {
		header('Location: index.php');
	}

	$post = obtenerPostId($conexion,$id);

	if (!$post) {
		header('Location: index.php');
	}

	$post = $post[0];
	
	require 'Views/single.view.php';

?>