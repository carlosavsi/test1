<?php
include("config.php");
include("includes/head.php");
include("includes/menu.php");

$nombre = $_POST["Nombre"];
$usuario = $_POST["Usuario"];
$contraseña  = $_POST["Password"];

if ($nombre == "" && $usuario == "" && $contraseña == "")
{
	?>
	<center>
	<div class="alert alert-warning" role="alert">
	<br />" . "<h2>" . "Por favor ingrese los datos" . "</h2>
	</div>
	</center>
	<br>
	<center>
	<a class="btn btn-default" href="registrar.php" role="button">Reintentar</a>
	</center>
	<?php
}

else
{
	$inserta = "INSERT INTO usuarios VALUES ('$nombre','$usuario','$contraseña')";
	$sql->real_query($inserta);
	?>

	<center>
	<div class="alert alert-success" role="alert">
	<br /><h2>Usuario Creado Exitosamente!</h2>
	<?php
	echo "<h4>" . "Bienvenido: " . $nombre . "</h4>" . "\n\n";
	?>
	</div>
	</center>
	<?php
}
@include("includes/footer.php");
?>