<?php
$password = password_hash($_POST['clave'], PASSWORD_DEFAULT, array('cost'=>4));

$usuario = $_POST['usuario'];

include('conexion.php');

mysqli_query($datos_bd, "INSERT INTO user_pass VALUES ('$usuario','$password')");

header("Location: unidad8.php?reg_ok");