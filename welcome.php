<?php
@include("config.php");
@include("includes/head.php");
@include("includes/menu.php");

$usuario = $_POST["user"];
$contra = $_POST["contra"];

if($usuario == "" && $contra == "")
{
	echo "<center>";
	echo "<h2>";
	echo '<div class="alert alert-warning" role="alert">';
	echo "Ingrese usuario y contraseña";
	echo "</div>";
	echo "</h2>";
	echo "</center>";
}
else
{

	$sql->real_query("SELECT  `Nombre` FROM `usuarios` WHERE `Usuario` = '$usuario' and `Password` = '$contra'");
	$resultado = $sql->use_result();

	while ( $fila = $resultado->fetch_assoc())
	{      
		if (is_null($fila['Nombre']))
		{
			echo "<center>";
			echo "Usuario y/o contraseña incorrectos";
			echo '<div class="alert alert-danger" role="alert">';
			echo "No se pudo iniciar sesion";
			echo "</div>";
			echo "</center>";
		}		
		else
		{
			echo "<center>";
			echo "<h2>";
			echo "Bienvenido: " . $fila['Nombre'];
			echo "</h2>";
			echo '<div class="alert alert-success" role="alert">';
			echo "Sesion iniciada correctamente!!";
			echo "</div>";
			echo "</center>";
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