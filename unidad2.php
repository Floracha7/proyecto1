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
		<h2>Eventos</h2>
		<?php  
		include('calculo_fecha.php');
		?>
		<h3><strong>Inserte fecha exacta del evento</strong></h3>
			<form action= "" method="POST">
			
             <input class ="formas" type="number" min="1" max= "31" name="dia" placeholder="Dia">
            
			<input class ="formas" type="number" min="1" max= "12" name="mes" placeholder="Mes">
			
			<input class ="formas" type="number" min="2022" max= "" name="anio" placeholder="Año">
			
			
			<input class ="formas" type="submit" value="Calcular">

	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>