<?php
$nombre = $_POST['nombre'];
$equipo_1 = $_POST['equipo_1'];
$equipo_2 = $_POST['equipo_2'];

$header = 'From: ' . $nombre . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Partido Marruecos Iran"." \r\n";
$mensaje = "Nombre= " . $nombre . ",
Equipo 1 = " . $equipo_1 . " \r\n";
$mensaje .= "Equipo 2= " . $equipo_2 . " \r\n";
$mensaje .= "Partido Marruecos - iran". " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'manuddr.1993@gmail.com';
$asunto = 'marcador mundial';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';
?>
