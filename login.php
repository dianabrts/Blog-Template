<?php 
	session_start();

	require 'Admin/config.php';
	require 'functions.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$usuario = limpiarDatos($_POST['usuario']);
		$password = limpiarDatos($_POST['password']);

		if ($usuario == $blogAdmin['usuario'] && $password == $blogAdmin['password']) {
			$_SESSION['admin'] = $blogAdmin['usuario'];
			header('Location: ' . RUTA . 'Admin');
		}
	}

	require 'Views/login.view.php';
?>