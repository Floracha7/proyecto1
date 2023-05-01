 <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="estilos1.css">
<div class="mostrar_comentarios">

	<?php
	if(isset($_POST['mostrar_comentarios']))	{
		 date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fecha_actual = date('d-m-Y', time());
    $hora_actual = date('H:i:s');
		$contenido = "<p>Nombre y Apellido: ".$_POST['nombre']."</p><p>Email: ".$_POST['mail']."</p><p>Comentario: ".$_POST['comentario']."</p><p>Fecha: ".$fecha_actual. "</p><p>Hora: ".$hora_actual. "</p><hr/>";
		
		$file = fopen("comentarios.txt", "a+");
		fputs($file, $contenido);
		fpassthru($file);
		fclose($file);
	}
	?>
</div>