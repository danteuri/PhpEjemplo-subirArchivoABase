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
		<label for="nombre">Nombre:</label><br>
		<input type="text" name="nombre"><br>
        </div>

		<div class="grupoInputs">
		<label for="usuario">Nombre de Usuario</label><br>
		<input type="text" name="usuario">
		</div>

		<div class="grupoInputs">
		<label for="apellido">Apellido:</label><br>
		<input type="text" name="apellido"><br>
		</div>
		
		<div class="grupoInputs">
		<label for="edad">Edad:</label><br>
		<input type="number" name="edad"><br>
	    </div>

		<div class="grupoInputs">
		<label for="foto">Archivo:</label><br>
	    </div>

		<!-- <input type="file" name="foto" value="Foto" class="grupo"><br> -->
		<div class="grupoInputs">
		<input type="submit" value="Grabar"><br>
	    </div>

		<div>
		<p>AVISO: Hasta nuevo anuncio se requerira obligatoriamente una foto de usuario o la alta del formulario no sera completada y guardada en la base de datos</p>
		</div>
	</form>
</div>
	
	
</body>
</html>