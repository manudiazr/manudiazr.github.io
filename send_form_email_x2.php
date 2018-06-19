<?php
$nombre = $_POST['nombre'];
$rusia = $_POST['rusia'];
$egipto = $_POST['egipto'];
$colombia = $_POST['colombia'];
$japon = $_POST['japon'];
$polonia = $_POST['polonia'];
$senegal = $_POST['senegal'];
// $croacia = $_POST['croacia'];
// $nigeria = $_POST['nigeria'];

$header = 'From: ' . $nombre . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Partido Egipto - Uruguay"." \r\n";
$mensaje = "Nombre= " . $nombre . " \r\n";
$mensaje .= "Rusia= " . $rusia . " \r\n";
$mensaje .= "Egipto= " . $egipto . " \r\n";
$mensaje .= "Colombia= " . $colombia . " \r\n";
$mensaje .= "Japón= " . $japon . " \r\n";
$mensaje .= "polonia= " . $polonia . " \r\n";
$mensaje .= "Senegal= " . $senegal . " \r\n";
// $mensaje .= "Croacia= " . $croacia . " \r\n";
// $mensaje .= "Nigeria= " . $nigeria . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'manuddr.1993@gmail.com';
$asunto = 'marcador mundial';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';
?>
