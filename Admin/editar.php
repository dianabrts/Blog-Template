<?php
	session_start();

	require 'config.php';
	require '../functions.php';

	comprobarSesion();

	$conexion = conexion($bdConfig);

	if (!$conexion) {
		header('Location: ../error.php');
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$titulo = limpiarDatos($_POST['titulo']);
		$fragmento = limpiarDatos($_POST['fragmento']);
		$texto = $_POST['texto'];
		$id = limpiarDatos($_POST['id']);
		$thumbGuardada = limpiarDatos($_POST['thumb-guardada']);
		$thumb = $_FILES['thumb'];	

		if (empty($thumb['name'])) {
			$thumb = $thumbGuardada;
		} else { 
			$destino = '../' . $blogConfig['carpetaImagenes'] . $_FILES['thumb']['name'];

			move_uploaded_file($_FILES['thumb']['tmp_name'], $destino);

			$thumb = $_FILES['thumb']['name'];
		}

		$statement = $conexion->prepare('UPDATE articulos SET titulo = :titulo, fragmento = :fragmento, texto = :texto, thumb = :thumb WHERE id = :id');
		$statement->execute(array(':titulo' => $titulo, ':fragmento' => $fragmento, ':texto' => $texto, ':thumb' => $thumb, ':id' => $id));

		header('Location: ' . RUTA . 'Admin');

	} else {
		$idArticulo = idArticulo($_GET['id']);

		if (empty($idArticulo)) {
			header('Location: '. RUTA . 'Admin');
		}

		$post = obtenerPostId($conexion,$idArticulo);

		if (!$post) {
			header('Location: '. RUTA . 'Admin');
		}

		$post = $post[0];
	}

	require '../Views/editar.view.php';
 ?>