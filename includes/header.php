<?php require_once 'connection.php';?>
<?php require_once 'includes/helpers.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<title>Blog Gaimer</title>
</head>

<body>
	<!--Header-->
	<header id="cabecera">
		<div id="logo">
			<h1><a href="index.php">Blog Gaimer</a></h1>
		</div>

		<!--Menu-->
		<?php ?>
		<nav id="menu">
			<ul>
				<li>
					<a href="index.php">Inicio</a>
				</li>
				<?php
					$cats = get_categories($db);
					while($cat = mysqli_fetch_assoc($cats)): 
				?>
					<li>
						<a href="categoria.php?id"><?=$cat['nombre']?></a>
					</li>
				<?php endwhile; ?>
				<li>
					<a href="index.php">Sobre mi</a>
				</li>
				<li>
					<a href="index.php">Contacto</a>
				</li>
			</ul>
		</nav>
	</header>