<?php
@include("config.php");
@include("includes/head.php");
@include("includes/menu.php");

$antiguo = $_POST["nomAntiguo"];
$nuevo = $_POST["nomNuevo"];

#$editar = "update usuarios set `Nombre` = 'Carlos Avalos' where `Usuario` = 'carlosav'";

if (isset($_POST["check_name"]))
{
	$editanom = "UPDATE usuarios SET `Nombre` = '$nuevo' WHERE `Nombre` = '$antiguo'";
	$sql->real_query($editanom);

	echo "<center>";
	echo '<div class="alert alert-success" role="alert">';
	echo "<br />" . "<h2>" . "Se ha cambiado el nombre correctamente" . "</h2>";
	echo "</div>";
	echo "</center>";	
}

if (isset($_POST["check_user"]))
{
	$editausr = "UPDATE usuarios SET `Usuario` = '$nuevo' WHERE `Usuario` = '$antiguo'";
	$sql->real_query($editausr);

	echo "<center>";
	echo '<div class="alert alert-success" role="alert">';
	echo "<br />" . "<h2>" . "Se ha cambiado el nombre de usuario correctamente" . "</h2>";
	echo "</div>";
	echo "</center>";	
}

if (isset($_POST["check_pass"]))
{
	$editapas = "UPDATE usuarios SET `Password` = '$nuevo' WHERE `Password` = '$antiguo'";
	$sql->real_query($editapas);

	echo "<center>";
	echo '<div class="alert alert-success" role="alert">';
	echo "<br />" . "<h2>" . "Se ha cambiado la contraseña correctamente" . "</h2>";
	echo "</div>";
	echo "</center>";	
}

@include("includes/footer.php");
?>