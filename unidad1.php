<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="estilos1.css">
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
		<h2>Agenda de clases</h2>
		<form action= "insertar_clases.php" method="POST">
			
             <input class ="formas" type="number" name="clase" placeholder="Clase">
            
			<input class ="formas" type="text" name="unidad" placeholder="Unidad">
			
			<input class ="formas" type="date" name="fecha" placeholder="Fecha">
			
			
			<input class ="formas" type="submit" value="Enviar">
			
		</form>
	<?php
if(isset($_GET['ok'])){
	echo "<h4>Datos cargados correctamente! Gracias.</h4>";
}
?>
<div id="mostrar_datos">
	<h3>Lista de clases </h3>
	<?php
	include("ver_clases.php");
	?>
</div>

	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>