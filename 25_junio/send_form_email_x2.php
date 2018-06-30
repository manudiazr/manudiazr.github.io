<?php
$nombre = $_POST['nombre'];
$asaudita = $_POST['asaudita'];
$egipto = $_POST['egipto'];
$rusia = $_POST['rusia'];
$uruguay = $_POST['uruguay'];
$españa = $_POST['españa'];
$marruecos = $_POST['marruecos'];
$iran = $_POST['iran'];
$portugal = $_POST['portugal'];

$header = 'From: ' . $nombre . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Partido Egipto - Uruguay"." \r\n";
$mensaje = "Nombre= " . $nombre . " \r\n";
$mensaje .= "asaudita= " . $asaudita . " \r\n";
$mensaje .= "egipto= " . $egipto . " \r\n";
$mensaje .= "rusia= " . $rusia . " \r\n";
$mensaje .= "uruguay= " . $uruguay . " \r\n";
$mensaje .= "españa= " . $españa . " \r\n";
$mensaje .= "marruecos= " . $marruecos . " \r\n";
$mensaje .= "iran= " . $iran . " \r\n";
$mensaje .= "portugal= " . $portugal . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'manuddr.1993@gmail.com';
$asunto = 'marcador mundial';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';
?>
