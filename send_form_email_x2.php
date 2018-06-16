<?php
$nombre = $_POST['nombre'];
$costarica = $_POST['costarica'];
$serbia = $_POST['serbia'];
$brasil = $_POST['brasil'];
$suiza = $_POST['suiza'];
$alemania = $_POST['alemania'];
$mexico = $_POST['mexico'];
// $croacia = $_POST['croacia'];
// $nigeria = $_POST['nigeria'];

$header = 'From: ' . $nombre . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Partido Egipto - Uruguay"." \r\n";
$mensaje = "Nombre= " . $nombre . " \r\n";
$mensaje .= "Costa Rica= " . $costarica . " \r\n";
$mensaje .= "Serbia= " . $serbia . " \r\n";
$mensaje .= "Brasil= " . $brasil . " \r\n";
$mensaje .= "Suiza= " . $suiza . " \r\n";
$mensaje .= "Alemania= " . $alemania . " \r\n";
$mensaje .= "Mexico= " . $mexico . " \r\n";
// $mensaje .= "Croacia= " . $croacia . " \r\n";
// $mensaje .= "Nigeria= " . $nigeria . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'manuddr.1993@gmail.com';
$asunto = 'marcador mundial';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';
?>
