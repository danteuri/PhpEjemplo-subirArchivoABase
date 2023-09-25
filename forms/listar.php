<?php
include '../code/menu.php';
?>
<html lang="es">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Altas</title>
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/respuestas.css">
	</head>
	<body>
	<h3 class="tablatitulo">LISTADO DE LOS REGISTRO DE LA TABLA</h3>

	<table class="tabla">
		<caption class="ttitulo">Lista de usuarios</caption>
		<thead class="ttitulo">
			<tr>
			<th>ID</th>
			<th>Apellido</th>
			<th>Nombre</th>
			<th>Usuario</th>
			<th>edad</th>
			</tr>
		</thead>
	<?php 

$base = "gestion_s";
$Conexion =  mysqli_connect("localhost","root","",$base);

$cadena= "SELECT * FROM persona ";

$consulta = mysqli_query($Conexion,$cadena);

while(  $registro = mysqli_fetch_row($consulta)   ){
	echo "<tr class='trmain'>";
	echo "<th>".$registro[0]."<th>".$registro[1]."</th><th>".$registro[2]."</th><th>".$registro[3]."</th><th>".$registro[4]."</th><th><img src='data:image/jpeg;base64,".base64_encode($registro[5])."' width='64px'/></th>";
	echo "</tr>";
}
 ?>
    </table>
	</body>
</html>




