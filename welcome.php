<?php
if ( $_POST["user"] == "" && $_POST["contra"] == "")
	{
		echo "ingresar usuario y contraseña";
	}
else
	{
		echo "Bienvenido  ". $_POST["user"];
	}
?>
<br>
<a href="index.php"> Regresar </a>