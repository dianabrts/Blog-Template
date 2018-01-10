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
		$thumb = $_FILES['thumb']['tmp_name'];

		$archivoSubido = '../' . $blogConfig['carpetaImagenes'] . $_FILES['thumb']['name'];

		move_uploaded_file($thumb, $archivoSubido);

		$statement = $conexion->prepare("INSERT INTO articulos (id, titulo, fragmento, texto, thumb) VALUES (null, :titulo, :fragmento, :texto, :thumb)");
 
		$statement->execute(array(':titulo' => $titulo, ':fragmento' => $fragmento, ':texto' => $texto, ':thumb' => $_FILES['thumb']['name']));
	}

	require '../Views/nuevo.view.php';
?>