<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Pruebas</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Open+Sans+Condensed:300|Crushed|Fira+Sans" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>
<body>
	<?php
	@include("config.php");
	@include("includes/head.php");
	@include("includes/menu.php");
	?>

	<div class="container">
		<div class="row">
			<div class="col-md-0">
				<form action = "signin.php" method = "POST">
					<label>Registrarse</label>
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2">Nombre</span>
						<input type="text" class="form-control" aria-describedby="sizing-addon2" name = "Nombre">
					</div>         	
					<br>
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2">Usuario</span>
						<input type="text" class="form-control" aria-describedby="sizing-addon2" name = "Usuario">
					</div>         	
					<br>
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2">Contraseña</span>
						<input type="password" class="form-control" aria-describedby="sizing-addon2" name = "Password">
					</div>         	
					<br>
					<center><button type="submit" class="btn btn-default">Registrarse</button></center>
					<br>
				</form>
			</div>
		</div>
	</div>



	<?php
	@include("includes/footer.php");
	?>