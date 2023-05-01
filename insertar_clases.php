<?php 
$idclase_alumno = $_POST['clase'];
$unidad_alumno = $_POST['unidad'];
$fecha_alumno = $_POST['fecha'];


include("conexion.php");

mysqli_query($datos_bd, "INSERT INTO clases VALUES ($idclase_alumno, '$unidad_alumno', '$fecha_alumno')");


header("Location: unidad1.php?ok");
?>
