<?php
$nombre = $_POST['nombre'];
$inglaterra = $_POST['inglaterra'];
$panama = $_POST['panama'];
$japon = $_POST['japon'];
$senegal = $_POST['senegal'];
$polonia = $_POST['polonia'];
$colombia = $_POST['colombia'];
// $croacia = $_POST['croacia'];
// $nigeria = $_POST['nigeria'];

$header = 'From: ' . $nombre . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Partido Egipto - Uruguay"." \r\n";
$mensaje = "Nombre= " . $nombre . " \r\n";
$mensaje .= "inglaterra= " . $inglaterra . " \r\n";
$mensaje .= "panama= " . $panama . " \r\n";
$mensaje .= "japon= " . $japon . " \r\n";
$mensaje .= "senegal= " . $senegal . " \r\n";
$mensaje .= "polonia= " . $polonia . " \r\n";
$mensaje .= "colombia= " . $colombia . " \r\n";
// $mensaje .= "Croacia= " . $croacia . " \r\n";
// $mensaje .= "Nigeria= " . $nigeria . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'manuddr.1993@gmail.com';
$asunto = 'marcador mundial';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';
?>
