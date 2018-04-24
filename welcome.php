<?php
	@include("config.php");
	@include("includes/head.php");

	$usuario = $_POST["user"];
	$contra = $_POST["contra"];

	if($usuario == "" && $contra == "")
	{
		echo "Ingrese usuario y contraseña por favor";
	}
	else
	{
		$sql->real_query("SELECT  `Nombre` FROM `usuarios` WHERE `Usuario` = '$usuario' and `Password` = '$contra'");
		$resultado = $sql->use_result();

		while ( $fila = $resultado->fetch_assoc())
		{			
			if (is_null($fila['Nombre']))
			{
				echo "Usuario y/o contraseña incorrectos";
			}
			else
			{
				echo "Bienvenido: " . $fila['Nombre'];
			}
		}
	}		
?>
	<br>
	<a href="index.php"> Regresar </a>

<?php
	@include("includes/footer.php");
?>