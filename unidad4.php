<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Imágenes con PHP</h2>
		<h2><strong>Consigna 1: Imagen con marca de agua</strong></h2>
		
<img src="marca_d_agua.php" alt="no se encontró">
<h2><strong>Consigna 2: Imagen en miniatura</strong></h2>

<?php include("thumbnail.php"); ?>

<a href="unidad4.jpg"  data-lightbox="image-6 " data-title = "Unidad IV: PHP Avanzado"><img src="unidad4miniatura.jpg"></a>

	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
</div>
</body>
</html>