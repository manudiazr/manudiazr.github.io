<?php
$nombre = $_POST['nombre'];
$dinamarca = $_POST['dinamarca'];
$francia = $_POST['francia'];
$australia = $_POST['australia'];
$peru = $_POST['peru'];
$islandia = $_POST['islandia'];
$croacia = $_POST['croacia'];
$nigeria = $_POST['nigeria'];
$argentina = $_POST['argentina'];

$header = 'From: ' . $nombre . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Partido Egipto - Uruguay"." \r\n";
$mensaje = "Nombre= " . $nombre . " \r\n";
$mensaje .= "dinamarca= " . $dinamarca . " \r\n";
$mensaje .= "francia= " . $francia . " \r\n";
$mensaje .= "australia= " . $australia . " \r\n";
$mensaje .= "peru= " . $peru . " \r\n";
$mensaje .= "islandia= " . $islandia . " \r\n";
$mensaje .= "croacia= " . $croacia . " \r\n";
$mensaje .= "nigeria= " . $nigeria . " \r\n";
$mensaje .= "argentina= " . $argentina . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'manuddr.1993@gmail.com';
$asunto = 'marcador mundial';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';
?>
