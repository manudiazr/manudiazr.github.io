<?php
$nombre = $_POST['nombre'];
$surcorea = $_POST['surcorea'];
$mexico = $_POST['mexico'];
$alemania = $_POST['alemania'];
$suecia = $_POST['suecia'];
$belgica = $_POST['belgica'];
$tunez = $_POST['tunez'];
// $croacia = $_POST['croacia'];
// $nigeria = $_POST['nigeria'];

$header = 'From: ' . $nombre . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Partido Egipto - Uruguay"." \r\n";
$mensaje = "Nombre= " . $nombre . " \r\n";
$mensaje .= "surcorea= " . $surcorea . " \r\n";
$mensaje .= "mexico= " . $mexico . " \r\n";
$mensaje .= "alemania= " . $alemania . " \r\n";
$mensaje .= "suecia= " . $suecia . " \r\n";
$mensaje .= "belgica= " . $belgica . " \r\n";
$mensaje .= "tunez= " . $tunez . " \r\n";
// $mensaje .= "Croacia= " . $croacia . " \r\n";
// $mensaje .= "Nigeria= " . $nigeria . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'manuddr.1993@gmail.com';
$asunto = 'marcador mundial';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';
?>
