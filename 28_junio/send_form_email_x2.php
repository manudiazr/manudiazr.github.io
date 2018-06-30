<?php
$nombre = $_POST['nombre'];
$inglaterra = $_POST['inglaterra'];
$belgica = $_POST['belgica'];
$panama = $_POST['panama'];
$tunez = $_POST['tunez'];
$senegal = $_POST['senegal'];
$colombia = $_POST['colombia'];
$japon = $_POST['japon'];
$polonia = $_POST['polonia'];

$header = 'From: ' . $nombre . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Partido Egipto - Uruguay"." \r\n";
$mensaje = "Nombre= " . $nombre . " \r\n";
$mensaje .= "inglaterra= " . $inglaterra . " \r\n";
$mensaje .= "belgica= " . $belgica . " \r\n";
$mensaje .= "panama= " . $panama . " \r\n";
$mensaje .= "tunez= " . $tunez . " \r\n";
$mensaje .= "senegal= " . $senegal . " \r\n";
$mensaje .= "colombia= " . $colombia . " \r\n";
$mensaje .= "japon= " . $japon . " \r\n";
$mensaje .= "polonia= " . $polonia . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'manuddr.1993@gmail.com';
$asunto = 'marcador mundial';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';
?>
