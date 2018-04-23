<?php
setlocale(LC_ALL,'es_US.UTF-8');
date_default_timezone_set('America/Mexico_City');

$sql = new MySQLi("SERVIDOR", "USUARIO", "CONTRASEÑA", "NOMBRE BBDD");
$sql->Query("SET names 'utf8'");
?>