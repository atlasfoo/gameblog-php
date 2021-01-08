<?php require_once 'includes/header.php'; ?>
	<div id="contenedor">
		<?php require_once 'includes/sidebar.php'; ?>

		<!--Main-->
		<main id="principal">
			<h1>Ultimas entradas</h1>
			<?php 
				$entries = get_last_entries($db);
				
				if(!empty($entries)):
					while($entry = mysqli_fetch_assoc($entries)):
				
			?>
				<article class="entrada">
					<a href="">
						<h2><?=$entry['titulo']?></h2>
						<span class="fecha"><?=$entry['categoria'].' | '.$entry['fecha']?></span>
						<p>
							<?=substr($entry['descripcion'], 0, 180).'...'?>
						</p>
					</a>
				</article>
			<?php 
					endwhile;
				endif;
			?>
			
			
		</main>
		<div class="clearfix"></div>
	</div>
	<?php require_once 'includes/footer.php'; ?>