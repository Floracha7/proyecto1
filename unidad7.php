<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>

	<nav>
		<?php include("botonera.php"); ?>

		<?php 		
		include ("include.php");

		$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);

		$prod = new Producto($base);
		$listar_productos = $prod->listar_compras();


		$carrito = new Carrito($base);
		$listar_compra = $carrito->listar_compras();
		
		 ?>
	</nav>
	</header>
	<section>
		<h2>Compras</h2>
		<table border ="1">
			<th>Código</th>
			<th>Producto</th>
			<th>Descripcion</th>
			<th>Precio</th>
			<th>Comprar</th>
			<?php for($i=0; $i<count($listar_productos); $i++) {?>
				<tr>
					<td><?php echo $listar_productos[$i]['codigo']?> </td>
					<td><?php echo $listar_productos[$i]['producto']?> </td>
					<td><?php echo $listar_productos[$i]['descripcion']?> </td>
					<td>$<?php echo $listar_productos[$i]['precio']?> </td>
					<td><a href='cargar.php?codigo=<?php echo $listar_productos[$i]['codigo']?>'><button>Comprar</button></a></td>
				</tr>
			<?php } ?>
		</table >
	</section>
	<aside>
		<strong>PRODUCTOS INSERTADOS AL CARRITO ✔<strong>
			<?php if($listar_compra){
			for($i=0; $i<count($listar_compra); $i++) {?>
					<p><strong>Producto:</strong><?php echo $listar_compra[$i]['producto']?></p>
					<p><strong>Descripcion:</strong><?php echo $listar_compra[$i]['descripcion']?></p>
					<p><strong>Precio:</strong>$<?php echo $listar_compra[$i]['precio']?></p>
					<a href="eliminar.php?codigo=<?php echo $listar_compra[$i]['codigo']?>"><button>Eliminar</button></a>
			<?php }} ?>	
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>