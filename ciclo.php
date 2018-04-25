<?php
include("includes/head.php");
echo "Este programa ejecuta un ciclo";
echo "<br><br>";
for ( $i = 0; $i < 11; $i++)
{
	echo "El ciclo se ha ejecutado $i veces";
	echo "<br>";
}
@include("includes/footer.php");
?>