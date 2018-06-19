<?php
$nombre = $_POST['nombre'];
$dinamarca = $_POST['dinamarca'];
$australia = $_POST['australia'];
$francia = $_POST['francia'];
$peru = $_POST['peru'];
$argentina = $_POST['argentina'];
$croacia = $_POST['croacia'];
// $croacia = $_POST['croacia'];
// $nigeria = $_POST['nigeria'];

$header = 'From: ' . $nombre . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Partido Egipto - Uruguay"." \r\n";
$mensaje = "Nombre= " . $nombre . " \r\n";
$mensaje .= "Dinamarca= " . $dinamarca . " \r\n";
$mensaje .= "Australia= " . $australia . " \r\n";
$mensaje .= "Francia= " . $francia . " \r\n";
$mensaje .= "Perú= " . $peru . " \r\n";
$mensaje .= "Argentina= " . $argentina . " \r\n";
$mensaje .= "Croacia= " . $croacia . " \r\n";
// $mensaje .= "Croacia= " . $croacia . " \r\n";
// $mensaje .= "Nigeria= " . $nigeria . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'manuddr.1993@gmail.com';
$asunto = 'marcador mundial';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';
?>
