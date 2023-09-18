<?php
include '../code/menu.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Bajas</title>
	<link rel="stylesheet" href="../css/altaBajaModificacion.css">
	<link rel="stylesheet" href="../css/menu.css">
</head>
<body>

<div class="container">
	<h3 class="altaTitulo" style="text-align: center;">FORMULARIO DE BAJA</h3>
	<form class="altaInput" action="../code/bajas.php" method="POST" >
	    <div class="grupoInputs">
		<label for="id">Identificación:</label>
        <input type="text" name="id"><br>	
        </div>
		
		<div class="btn-submit">
		<input type="submit" value="Eliminar"><br>
        </div>
	</form>
</div>
	
</body>
</html>