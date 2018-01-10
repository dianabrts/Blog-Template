<?php

	function conexion($bdConfig){
		try {
			$conexion = new PDO("mysql:host=localhost;dbname=".$bdConfig['dbName'],$bdConfig['username'],$bdConfig['pass']);
			return $conexion;
		} catch (PDOException $e) {
			return false;
		}
	}

	function limpiarDatos($datos){
		$datos = trim($datos);
		$datos = stripslashes($datos);
		$datos = htmlspecialchars($datos);
		return $datos;
	}

	function paginaActual(){
		return isset($_GET['p']) ? (int)$_GET['p'] : 1;		
	}

	function getPosts($postPorPagina,$conexion){
		$inicio = (paginaActual() > 1) ? (paginaActual() * $postPorPagina - $postPorPagina) : 0; 

		$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $postPorPagina");
		$statement->execute();
		return $statement->fetchAll();
	}

	function totalPaginas($postPorPagina, $conexion){
		$totalPost = $conexion->prepare("SELECT FOUND_ROWS() AS total");
		$totalPost->execute();
		$totalPost = $totalPost->fetch()['total'];

		$numeroPaginas = ceil($totalPost / $postPorPagina);

		return $numeroPaginas;
	}

	function idArticulo($id){
		return (int)limpiarDatos($id);
	}

	function obtenerPostId($conexion,$id){
		$resultado = $conexion->query("SELECT * FROM articulos WHERE id=$id LIMIT 1");
		$resultado = $resultado->fetchAll();

		return ($resultado) ? $resultado : false;
	}

	function fecha($fecha){
		$timeStamp = strtotime($fecha);
		$meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
		$dia = date('d',$timeStamp);
		$mes = date('m',$timeStamp) - 1;
		$year = date('Y',$timeStamp);

		$fecha = "$dia de " . $meses[$mes] . ' de ' . $year;

		return $fecha;
	}

	function comprobarSesion(){
		if (!isset($_SESSION['admin'])) {
			header('Location: ' . RUTA);
		}
	}
?>