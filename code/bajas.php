
<html lang="es">
	<head>
	<link rel="stylesheet" href="../css/menu.css">
	</head>
</html>


<?php 

include 'menu.php';


$id = $_POST['id'];

$base = "gestion_s";
$Conexion =  mysqli_connect("localhost","root","",$base);
if($Conexion){
	echo "la conexion fue exitosa "."<br>";

}else{
	echo "la conexion ha fallado "."<br>";
}

$cadena= "DELETE FROM persona  WHERE id = '$id'";  

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	echo "se ha eliminado un registro"."<br>";

}else{
	echo "NO se ha eliminado un registro"."<br>";
	echo mysqli_error($Conexion);
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<a href="form-bajas.php">Volver</a>
	
</body>
</html>