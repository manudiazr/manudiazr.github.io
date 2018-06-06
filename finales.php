<?php
$nombre = $_POST['nombre'];
$grupoA = $_POST['grupoA'];
$_2grupoA = $_POST['2grupoA'];
$grupoB = $_POST['grupoB'];
$_2grupoB = $_POST['2grupoB'];
$grupoC = $_POST['grupoC'];
$_2grupoC = $_POST['2grupoC'];
$grupoD = $_POST['grupoD'];
$_2grupoD = $_POST['2grupoD'];
$grupoE = $_POST['grupoE'];
$_2grupoE = $_POST['2grupoE'];
$grupoF = $_POST['grupoF'];
$_2grupoF = $_POST['2grupoF'];
$grupoG = $_POST['grupoG'];
$_2grupoG = $_POST['2grupoG'];
$grupoH = $_POST['grupoH'];
$_2grupoH = $_POST['2grupoH'];
$cuartos_1 = $_POST['cuartos_1'];
$cuartos_2 = $_POST['cuartos_2'];
$cuartos_3 = $_POST['cuartos_3'];
$cuartos_4 = $_POST['cuartos_4'];
$cuartos_5 = $_POST['cuartos_5'];
$cuartos_6 = $_POST['cuartos_6'];
$cuartos_7 = $_POST['cuartos_7'];
$cuartos_8 = $_POST['cuartos_8'];
$semifinalista_1 = $_POST['semifinalista_1'];
$semifinalista_2 = $_POST['semifinalista_2'];
$semifinalista_3 = $_POST['semifinalista_3'];
$semifinalista_4 = $_POST['semifinalista_4'];
$finalista_1 = $_POST['finalista_1'];
$finalista_2 = $_POST['finalista_2'];
$finalista_3 = $_POST['finalista_3'];
$finalista_4 = $_POST['finalista_4'];
$campeon = $_POST['campeon'];

$header = 'From: ' . $nombre . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Nombre= " . $nombre . ",
Primer Finalista grupo A = " . $grupoA . " \r\n";
$mensaje .= "Segundo Finalista grupo A = " . $_2grupoA . " \r\n";
$mensaje .= "Primer Finalista grupo B = " . $grupoB . " \r\n";
$mensaje .= "Segundo Finalista grupo B = " . $_2grupoB . " \r\n";
$mensaje .= "Primer Finalista grupo C = " . $grupoC . " \r\n";
$mensaje .= "Segundo Finalista grupo C = " . $_2grupoC . " \r\n";
$mensaje .= "Primer Finalista grupo D = " . $grupoD . " \r\n";
$mensaje .= "Segundo Finalista grupo D = " . $_2grupoD . " \r\n";
$mensaje .= "Primer Finalista grupo E = " . $grupoE . " \r\n";
$mensaje .= "Segundo Finalista grupo E = " . $_2grupoE . " \r\n";
$mensaje .= "Primer Finalista grupo F = " . $grupoF . " \r\n";
$mensaje .= "Segundo Finalista grupo F = " . $_2grupoF . " \r\n";
$mensaje .= "Primer Finalista grupo G = " . $grupoG . " \r\n";
$mensaje .= "Segundo Finalista grupo G = " . $_2grupoG . " \r\n";
$mensaje .= "Primer Finalista grupo H = " . $grupoH . " \r\n";
$mensaje .= "Segundo Finalista grupo H = " . $_2grupoH . " \r\n";
$mensaje .= "Cuartos finalista 1 = " . $cuartos_1 . " \r\n";
$mensaje .= "Cuartos finalista 2 = " . $cuartos_2 . " \r\n";
$mensaje .= "Cuartos finalista 3 = " . $cuartos_3 . " \r\n";
$mensaje .= "Cuartos finalista 4 = " . $cuartos_4 . " \r\n";
$mensaje .= "Cuartos finalista 5 = " . $cuartos_5 . " \r\n";
$mensaje .= "Cuartos finalista 6 = " . $cuartos_6 . " \r\n";
$mensaje .= "Cuartos finalista 7 = " . $cuartos_7 . " \r\n";
$mensaje .= "Cuartos finalista 8 = " . $cuartos_8 . " \r\n";
$mensaje .= "semiFinalista 1 = " . $semifinalista_1 . " \r\n";
$mensaje .= "semiFinalista 2 = " . $semifinalista_2 . " \r\n";
$mensaje .= "semiFinalista 3 = " . $semifinalista_3 . " \r\n";
$mensaje .= "semiFinalista 4 = " . $semifinalista_4 . " \r\n";
$mensaje .= "Finalista 1 = " . $finalista_1 . " \r\n";
$mensaje .= "Finalista 2 = " . $finalista_2 . " \r\n";
$mensaje .= "Finalista 3 = " . $finalista_3 . " \r\n";
$mensaje .= "Finalista 4 = " . $finalista_4 . " \r\n";
$mensaje .= "Campeon = " . $campeon . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'manuddr.1993@gmail.com';
$asunto = 'marcador mundial finales';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado correctamente';
?>
