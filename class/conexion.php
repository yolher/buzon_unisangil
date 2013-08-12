<?php
$hots="localhost";
$user="yolher";
$pw="2591989yolherc";
$db="encuesta";
$con=mysql_connect($hots,$user,$pw) or die("no se pudo conectar al servidor");
mysql_select_db($db,$con) or die("no se pudo conectar con la base de datos");
?>