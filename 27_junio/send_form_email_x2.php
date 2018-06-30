<?php
$nombre = $_POST['nombre'];
$serbia = $_POST['serbia'];
$brasil = $_POST['brasil'];
$suiza = $_POST['suiza'];
$costarica = $_POST['costarica'];
$mexico = $_POST['mexico'];
$suecia = $_POST['suecia'];
$surcorea = $_POST['surcorea'];
$alemania = $_POST['alemania'];

$header = 'From: ' . $nombre . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Partido Egipto - Uruguay"." \r\n";
$mensaje = "Nombre= " . $nombre . " \r\n";
$mensaje .= "serbia= " . $serbia . " \r\n";
$mensaje .= "brasil= " . $brasil . " \r\n";
$mensaje .= "suiza= " . $suiza . " \r\n";
$mensaje .= "costarica= " . $costarica . " \r\n";
$mensaje .= "mexico= " . $mexico . " \r\n";
$mensaje .= "suecia= " . $suecia . " \r\n";
$mensaje .= "surcorea= " . $surcorea . " \r\n";
$mensaje .= "alemania= " . $alemania . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'manuddr.1993@gmail.com';
$asunto = 'marcador mundial';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';
?>
