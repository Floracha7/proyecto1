<?php session_start(); ?>
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
		<h2>Consultas</h2>
		<?php 
function contenido_captcha(){
$pattern = "1234567890abcdefghijklmnopqrstuvwxyz#$%/?";
$clave = '';
for($i=0; $i<7;$i++){
	$clave .= $pattern[rand(0,39)];
}
return $clave;
}
$_SESSION['captcha'] = contenido_captcha();
?>
<form method="POST" action="cargar.php">
<li>
          <label for="name">Nombre :</label>
    <input class="formas" type="text" name="nombre" id="nombre" placeholder="">
    

          <label for="name">Apellido :</label>
    <input class="formas" type="text" name="apellido" id="apellido" placeholder="">
</li>

   <li>
          <label for="name">Correo :</label>
    <input class="formas" type="mail" name="correo" id="mail" placeholder="">
   
          <label for="name">Consulta :</label>
    <input class="formas" type="text" name="consulta" id="consulta">
</li>
 
      <img src="captcha.php" alt="no se encontró"class="captcha">
      
    
      <li>
      	 <label for="name"> Código captcha :</label>
      <input  class="formas" type="text" name="clave" class="formas"  >
      </li>
      
         
    <input class="formas" type="submit" name="boton" value="Enviar">
			
		
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>