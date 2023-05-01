<?php 
$src_img = imagecreatefromjpeg("unidad4.jpg");
$alto = imagesy($src_img)*0.29296875;
$ancho = imagesx($src_img)*0.29296875;
$dst_img = imagecreatetruecolor($ancho, $alto);
$imagen = imagecreate($ancho, $alto);
imagecopyresized($dst_img, $src_img, 0, 0, 0, 0, $ancho, $alto, imagesx($src_img), imagesy($src_img));

imagejpeg($dst_img, "unidad4miniatura.jpg");
imagedestroy($dst_img);
?>