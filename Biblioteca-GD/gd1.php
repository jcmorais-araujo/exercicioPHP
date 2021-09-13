<?php

header("Content-Type: image/png");

// Criar a imagem com um amanho definido ( 256 x 256)
$imagem = imagecreate(256, 256);

$black = imagecolorallocate($imagem, 0, 0, 0);

$red = imagecolorallocate($imagem, 255, 0, 0);

imagestring($imagem, 5, 60, 120, "Curso de PHP 7", $red);

imagepng($imagem);

imagedestroy($imagem);

?>