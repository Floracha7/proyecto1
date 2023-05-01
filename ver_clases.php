<link rel="stylesheet" href="estilos1.css">
<?php
	include("conexion.php");
	$consulta = mysqli_query($datos_bd, "SELECT  *  FROM clases");
	while ($listar_clas = mysqli_fetch_assoc($consulta)) {
	?>
	<div class="clases">
		<p>Nº de clase: <?php echo $listar_clas['id_clase']; ?></p>
		<p>Unidad: <?php echo $listar_clas['unidad']; ?></p>
		<p>Fecha: <?php echo $listar_clas['fecha']; ?></p>
	</div>

	<?php } ?>