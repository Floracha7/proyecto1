<?php
$image = "programando.jpg";
$marcadeimagen = "marca.png";

$img = imagecreatefrompng($marcadeimagen);
$ext = substr($image, -3);
$ext = strtolower($ext);
switch ($ext) {
    case 'jpg':
        $img2 = imagecreatefromjpeg($image);
        break;
        
    case 'gif':
        $img2 = imagecreatefromgif($image);
        break;

    case 'png':
        $img2 = imagecreatefrompng($image);
        break;
}
imagecopy($img2, $img, (imagesx($img2)/5), (imagesy($img2)/5),(imagesx($img)/240), (imagesy($img)/240), imagesx($img),imagesy($img));
header("Content_type: image/jpeg");
imagejpeg($img2);
imagedestroy($image);
imagedestroy($img2);
?>