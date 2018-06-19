<?php
$nombre = $_POST['nombre'];
$uruguay = $_POST['uruguay'];
$asaudita = $_POST['asaudita'];
$portugal = $_POST['portugal'];
$marruecos = $_POST['marruecos'];
$iran = $_POST['iran'];
$españa = $_POST['españa'];
// $croacia = $_POST['croacia'];
// $nigeria = $_POST['nigeria'];

$header = 'From: ' . $nombre . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Partido Egipto - Uruguay"." \r\n";
$mensaje = "Nombre= " . $nombre . " \r\n";
$mensaje .= "Uruguay= " . $uruguay . " \r\n";
$mensaje .= "Arabia Saudita= " . $asaudita . " \r\n";
$mensaje .= "Portugal= " . $portugal . " \r\n";
$mensaje .= "Marruecos= " . $marruecos . " \r\n";
$mensaje .= "Iran= " . $iran . " \r\n";
$mensaje .= "España= " . $españa . " \r\n";
// $mensaje .= "Croacia= " . $croacia . " \r\n";
// $mensaje .= "Nigeria= " . $nigeria . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'manuddr.1993@gmail.com';
$asunto = 'marcador mundial';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';
?>
