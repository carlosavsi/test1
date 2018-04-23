<?php
	@include("menu.php");
	@include("includes/head.php");
	
	echo "Este programa muestra la concatenacion de tres cadenas ";
	$var1 = "Hola";
	$var2 = "mundo";	
	$var3 = "!!";
	echo "<br>";
	echo "$var1 $var2 $var3";
	
	@include("includes/footer.php");
?>