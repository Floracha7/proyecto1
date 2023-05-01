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
		<h2>Comentarios</h2>
   <h3>Ingrese su comentario</h3>
   <form action= "unidad3.php" method="POST">
			
             <input class ="formas" type="text" name="nombre" placeholder="Nombre y Apellido">
            
			<input class ="formas" type="mail" name="mail" placeholder="Email">
			
			<input class ="formas" type="text" name="comentario" placeholder="Comentario">
			
			
			<input class ="formas" type="submit" name="mostrar_comentarios" value="Enviar">
			
		</form>



<?php
include("comentarios.php");
?>

	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>