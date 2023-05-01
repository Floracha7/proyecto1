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
		<h2>Registrarse 📝</h2>
<form action="codificar.php" method="post">
	Email:<br /><input class="formas" type="text"  name="usuario" /><br />
	Password:<br /><input  class="formas" type="password" name="clave" /><br />

	<input class="formas" type="submit" name="ingresar" value="Registrarse" />
	</form>
 <p><?php if(isset($_GET['reg_ok'])) { echo "Usuario registrado✔";}?></p>
 

	</section>
	<aside>
    <h2>Iniciar sesión🔓</h2>
	<form action="verificar.php" method="post">
	Email:<br /><input class="formas" type="mail"  name="usuario" /><br />
	Password:<br /><input  class="formas" type="password" name="clave" /><br />

	<input class="formas" type="submit" name="ingresar" value="Iniciar sesión" />
	</form>
	<p><?php if(isset($_GET['pass_ok'])) { echo "Email y password correctos ✔";}?></p>
	<p><?php if(isset($_GET['pass_error'])) { echo "Email y password incorrectos ❌";}?></p>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>