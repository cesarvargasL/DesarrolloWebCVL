<?php session_start();
// estas cabeceras evitan que se almacene la imagen en el caché
header ("Expires: Sat, 12 Jul 2020 09:00:00 GMT");
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header ("Cache-Control: no-store, no-cache, must-revalidate");
header ("Cache-Control: post-check=0, pre-check=0", false);
header ("Pragma: no-cache");
// creamos la imagen con el tamaño determinado
$imagen = imagecreate(250, 100);
// elegimos los colores para el fondo y el texto
$rojo = mt_rand(150,200);
$verde = mt_rand(150,200);
$azul = mt_rand(200,250);
$rojo_fondo = mt_rand(80,120);
$verde_fondo = mt_rand(80,120);
$azul_fondo = mt_rand(80,200);
$rojo_basura = $rojo+55;
$verde_basura = $verde+55;
$azul_basura = $azul+5;
$color_texto = imagecolorallocate($imagen,$rojo,$verde,$azul);
$color_fondo = imagecolorallocate($imagen,$rojo_fondo,$verde_fondo,$azul_fondo);
$color_basura =imagecolorallocate($imagen,$rojo_basura,$verde_basura,$azul_basura);
//aplicamos el color de fondo

imagefill($imagen,0, 0, $color_fondo);

// construimos la palabra
$caracteres ="ABCDEFGHJKMNPRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789";
//indicar la cantidad de caracteres que tendrá la palabra del CAPTCHA
$cantidad=6;
$palabra="";
for($i=1;$i<=$cantidad;$i++) {
$pos = mt_rand(0,strlen($caracteres)-1);
$palabra.= substr($caracteres,$pos,1);
}


// imprimir la palabra
$x = mt_rand(10,120);
$y = mt_rand(40,65);
imagettftext($imagen, 28, mt_rand(-10,10), $x, $y, $color_texto,$randFontPath, $palabra);
//ensuciamos la imagen con líneas
for($i=1;$i<60;$i++){
$x = mt_rand(0, 250);
$y = mt_rand(0, 100);
imageline($imagen, $x, $y, $x+mt_rand(-40,40), $y+mt_rand(-40,40), $color_basura);
}
// enviamos mediante la sesión la palabra elegida
$_SESSION["oculto"] = $palabra;
// enviamos la cabecera correspondiente al navegador y luego la imagen

header("Content-type: image/png");
imagepng($imagen);
// eliminamos la imagen
imagedestroy($imagen);