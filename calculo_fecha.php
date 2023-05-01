<?php

if($_POST)
    {
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $anio = $_POST['anio'];
    $fecha_actual = date('d-m-Y', time());

    $restante = strtotime($anio.'-'.$mes.'-'.$dia)-strtotime($fecha_actual);

    if($restante >= 0){
    echo '<p> Quedan '.$restante / (86400).' días para el evento.</p>';}
    if($restante <= 0){
        echo '<p> El evento finalizó hace '.$restante / (-86400).' días. Para actualizar la fecha, contactarse al 0800-444-7866.</p>';}
    }
?>
