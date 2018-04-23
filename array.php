<?php
	@include("includes/head.php");
	echo "Este programa recorre un arreglo de cadenas";
	echo "<br><br>";
	$a[0] = "Cadena 1";
	$a[1] = "Cadena 2";
	$a[2] = "Cadena 3";
	$a[3] = "Cadena 4";
	$a[4] = "Cadena 5";

	for ( $i = 0; $i < 5; $i++)
	{
		echo "El valor de la posición $i es: $a[$i]";
		echo "<br>";
	}
	@include("includes/footer.php");
?>