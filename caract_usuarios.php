<?php 
include ("usuarios/usuarios.php");

$usuarioss = new Usuarios('Fabian', 'Fernandez', ("1990-05-10"));
$usuarioss->imprime_caracteristicas();

?>