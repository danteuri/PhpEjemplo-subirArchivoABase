
<html lang="es">
</html>


<?php 

include 'menu.php';


$ape = $_POST['apellido'];
$id = $_POST['id'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];
if($foto != "none")
{
	$fp = fopen($foto,"rb");
	$contenido = fread($fp,$fotoTamanio);
	$contenido = addslashes($contenido);
	fclose($fp);

	$base = "gestion_s";
	
$Conexion =  mysqli_connect("localhost","root","",$base);
if($Conexion){
	echo "la conexion fue exitosa "."<br>";

}else{
	echo "la conexion ha fallado "."<br>";
}
}
$cadena = "UPDATE  persona SET nombre = '$nom', apellido = '$ape', edad = '$ed', foto = '$contenido' WHERE id = '$id'";

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	echo "se ha modificado un registro"."<br>";

}else{
	echo "NO se ha modificado un registro"."<br>";
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
	<a href="form-modificacion.php">Volver</a>
	
</body>
</html>