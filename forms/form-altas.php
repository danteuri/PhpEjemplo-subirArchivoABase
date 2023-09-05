<?php
include '../code/menu.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/formAltas.css">
	<link rel="stylesheet" href="../css/menu.css">
	<title>Formulario de Altas</title>
</head>
<body>
<div class="container">
    <h3 class="altaTitulo">FORMULARIO DE ALTA</h3>
	<form class="altaInput" action="../code/altas.php" method="POST" enctype="multipart/form-data">

		<div class="grupoInputs">
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre"><br>
        </div>

		<div class="grupoInputs">
		<label for="apellido">Apellido:</label>
		<input type="text" name="apellido"><br>
		</div>
		
		<div class="grupoInputs">
		<label for="edad">Edad:</label>
		<input type="number" name="edad"><br>
	    </div>

		<div class="grupoInputs">
		<label for="foto">Archivo</label>
		<input type="file" name="foto"><br>
	    </div>

		<div class="btn-submit">
		<input type="submit" value="Grabar"><br>
	    </div>
	</form>
</div>
	
	
</body>
</html>