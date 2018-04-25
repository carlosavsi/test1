<?php
include("config.php");
include("includes/head.php");
include("includes/menu.php");

$usuario = $_POST["user"];
$contra = $_POST["contra"];

if($usuario == "" && $contra == "")
{
	?>
	<center>
	<h2>
	<div class="alert alert-warning" role="alert">
	Ingrese usuario y contraseña
	</div>
	</h2>
	</center>
<?php
}
else
{

	$sql->real_query("SELECT  `Nombre` FROM `usuarios` WHERE `Usuario` = '$usuario' and `Password` = '$contra'");
	$resultado = $sql->use_result();

	while ( $fila = $resultado->fetch_assoc())
	{      
		if (is_null($fila['Nombre']))
		{
			?>
			<center>
			Usuario y/o contraseña incorrectos
			<div class="alert alert-danger" role="alert">
			No se pudo iniciar sesion
			</div>
			</center>
			<?php
		}		
		else
		{
			?>
			<center>
			<h2>
			<?php
			echo "Bienvenido: " . $fila['Nombre'];
			?>
			</h2>
			<div class="alert alert-success" role="alert">
			Sesión iniciada correctamente!!
			</div>
			</center>
			<?php
		}
	} 
}   
	?>
	<br>
	<center>
	</div>
	<br>
	<a class="btn btn-default" href="login.php" role="button">Reintentar</a>
</center>
<?php
@include("includes/footer.php");
?>