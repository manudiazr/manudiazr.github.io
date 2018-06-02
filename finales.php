<?php
$nombre = $_POST['nombre'];
$grupoA = $_POST['grupoA'];
$grupoB = $_POST['grupoB'];
$grupoC = $_POST['grupoC'];
$grupoD = $_POST['grupoD'];
$grupoE = $_POST['grupoE'];
$grupoF = $_POST['grupoF'];
$grupoG = $_POST['grupoG'];
$grupoH = $_POST['grupoH'];
$semi_1 = $_POST['semi_1'];
$semi_2 = $_POST['semi_2'];
$semi_3 = $_POST['semi_3'];
$semi_4 = $_POST['semi_4'];
$finalista_1 = $_POST['finalista_1'];
$finalista_2 = $_POST['finalista_2'];
$campeon = $_POST['campeon'];

$header = 'From: ' . $nombre . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Nombre= " . $nombre . ",
Finalista grupo A = " . $grupoA . " \r\n";
$mensaje .= "Finalista grupo B = " . $grupoB . " \r\n";
$mensaje .= "Finalista grupo C = " . $grupoC . " \r\n";
$mensaje .= "Finalista grupo D = " . $grupoD . " \r\n";
$mensaje .= "Finalista grupo E = " . $grupoE . " \r\n";
$mensaje .= "Finalista grupo F = " . $grupoF . " \r\n";
$mensaje .= "Finalista grupo G = " . $grupoG . " \r\n";
$mensaje .= "Finalista grupo H = " . $grupoH . " \r\n";
$mensaje .= "Semi finalista 1 = " . $semi_1 . " \r\n";
$mensaje .= "Semi finalista 2 = " . $semi_2 . " \r\n";
$mensaje .= "Semi finalista 3 = " . $semi_3 . " \r\n";
$mensaje .= "Semi finalista 4 = " . $semi_4 . " \r\n";
$mensaje .= "Finalista 1 = " . $finalista_1 . " \r\n";
$mensaje .= "Finalista 2 = " . $finalista_2 . " \r\n";
$mensaje .= "Campeon = " . $campeon . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'manuddr.1993@gmail.com';
$asunto = 'marcador mundial finales';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';
?>
