<?php require 'header.php'; ?>
	<div class="contenedor">
		<h2> <?php echo $titulo;  ?> </h2>
		<?php foreach ($resultados as $post): ?>
			<div class="post">
				<article>
					<h2 class="titulo"><a href="single.php?id=<?php echo $post['id']; ?>"> <?php echo $post['titulo']; ?> </a></h2>
					<p class="fecha"> <?php echo fecha($post['fecha']); ?> </p>
					<div class="thumb">
						<a href="single.php?id=<?php echo $post['id']; ?>">
							<img src="<?php echo RUTA ;?>/Imagenes/<?php echo $post['thumb']; ?>" alt="">
						</a>
					</div>
					<p class="extracto"> <?php echo $post['fragmento']; ?></p>
					<a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Continuar Leyendo</a>
				</article>
			</div>
		<?php endforeach ?>

		<?php require 'paginacion.php'; ?>
	</div>

	<?php require 'footer.php'; ?>

</body>
</html>