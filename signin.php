<?php
@include("config.php");
@include("includes/head.php");
@include("includes/menu.php");

$nombre = $_POST["Nombre"];
$usuario = $_POST["Usuario"];
$contraseña  = $_POST["Password"];

if ($nombre == "" && $usuario == "" && $contraseña == "")
{
	echo "<center>";
	echo '<div class="alert alert-warning" role="alert">';
	echo "<br />" . "<h2>" . "Por favor ingrese los datos" . "</h2>";
	echo "</div>";
	echo "</center>";
	echo "<br>";
	echo "<center>";
	echo '<a class="btn btn-default" href="registrar.php" role="button">Reintentar</a>';
	echo "</center>";
}

else
{
	$inserta = "INSERT INTO usuarios VALUES ('$nombre','$usuario','$contraseña')";
	$sql->real_query($inserta);

	echo "<center>";
	echo '<div class="alert alert-success" role="alert">';
	echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
	echo "<h4>" . "Bienvenido: " . $nombre . "</h4>" . "\n\n";
	echo "</div>";
	echo "</center>";	
}
@include("includes/footer.php");
?>