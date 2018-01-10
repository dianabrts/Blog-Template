<?php require 'header.php'; ?>

    <div class="contenedor">
		<div class="post">
			<article>
				<h2 class="titulo"> Nuevo Articulo </h2>
				<form class="formulario" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
					<input type="text" name="titulo" placeholder="Titulo del Articulo">
					<input type="text" name="fragmento" placeholder="Fragmento del Articulo">
					<textarea name="texto" placeholder="Texto del Articulo"></textarea>
					<input type="file" name="thumb">
					<input type="submit" value="Crear Articulo">
				</form>
			</article>
		</div>
	</div>	

<?php require 'footer.php'; ?>