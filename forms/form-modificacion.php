<?php
include '../code/menu.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Modificacion</title>
	<link rel="stylesheet" href="../css/menu.css">
	<!-- <link rel="stylesheet" href="../css/menu.css"> PUEDE QUE ME EQUIVOQUE AL QUITARLO NO SE AUN 
	SON LAS 11:52PM Y LLEVO DESDE Q LLEGUE A MI CASA HACIENDO ESTO :<-->
</head>
<body>

<div class="container">
	<h3 class="altaTitulo">FORMULARIO DE MODIFICACION</h3>
	<form class="altaInput" action="../code/modificacion.php" method="POST" enctype="multipart/form-data">
	<div class="grupoInputs">
		<label for="id">Campo Clave ID:</label>
		<input type="text" name="id"><br>	
    </div>

		<br><br>
		Campos a modificar:<br>

		<div class="grupoInputs">
		<label for="nombre">Nombre:</label><br>
		<input type="text" name="nombre"><br>
	    </div>

		<div class="grupoInputs">
			<label for="apellido">Apellido</label><br>
			<input type="text" name="apellido">
		</div>

		<div class="grupoInputs">
		<label for="edad">Edad:</label><br>
		<input type="text" name="edad"><br>
	    </div>

		<div class="grupoInputs">
		<label for="foto">Archivo</label><br>
		<input type="file" name="foto"><br>
	    </div>

		<div class="btn-submit">
		<input type="submit" value="Modificar"><br>
	    </div>

	</form>
</div>
	
</body>
</html>