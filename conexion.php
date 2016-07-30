<?php

$usario="u274721820_gutbe";
$passwd="fo0y9CsXEd";
$servidor="mysql.hostinger.mx";
$BD="u274721820_pc";

/*$usario="n260m_14426545";
$passwd="drag0n";
$servidor="sql206.260mb.net";
$BD="n260m_14426545_pcatual";*/

$conexion=mysqli_connect($servidor,$usario,$passwd,$BD)or die("Error al conectarse a la base de datos:".mysqli_error());
?>
