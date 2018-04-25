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
				<form action = "edit.php" method = "POST">
					<label>Editar</label>
					<br>
					<div class="input-group">						
						<span class="input-group-addon" id="sizing-addon2">Antiguo</span>
						<input type="text" class="form-control" aria-describedby="sizing-addon2" name = "nomAntiguo">
					</div>
					<br>
					<div class="input-group">						
						<span class="input-group-addon" id="sizing-addon2">Nuevo</span>
						<input type="text" class="form-control" aria-describedby="sizing-addon2" name = "nomNuevo">
					</div>
					<label class="radio-inline">
						<input type="radio" name="check_name" id="inlineRadio1" value="option1"> Nuevo nombre
					</label>
					<label class="radio-inline">
						<input type="radio" name="check_user" id="inlineRadio2" value="option2"> Nuevo usuario
					</label>
					<label class="radio-inline">
						<input type="radio" name="check_pass" id="inlineRadio3" value="option3"> Nueva contraseña
					</label>
					<br>
					<center>
						<button type="submit" class="btn btn-default">Editar</button>
					</center>
				</form>
			</div>
		</div>
	</div>



	<?php
	@include("includes/footer.php");
	?>