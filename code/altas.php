<?php 

include 'menu.php';

$ape = $_POST['apellido'];
$nom = $_POST['nombre']; 
$usu = $_POST['usuario'];
$ed = $_POST['edad'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

// salida de informacion

echo "<h3>".$ape."</h3>". "<h3>".$nom."</h3>". "<h3>".$ed."</h3>";

/*
if($foto != "none"){
	$fp = fopen($foto,"rb");
	$contenido = fread($fp,$fotoTamanio);
	$contenido = addslashes($contenido);
	fclose($fp);
	var_dump($fp);

	$base = "gestion_s";
	$Conexion =  mysqli_connect("localhost","root","",$base);

	$cadena= "INSERT INTO persona(apellido, nombre, usuario, edad, foto) VALUES ('$ape','$nom', '$usu' ,'$ed','$contenido')";

	$resultado = mysqli_query($Conexion,$cadena);

	if($resultado){
	print "se ha insertado un registro"."<br>";

	}else{
	print "NO se ha generado un registro"."<br>";
	}

}
else
print "No se puede subir el archivo";
*/
if ($foto != "none") {

	$base = "gestion_s";
	$Conexion =  mysqli_connect("localhost","root","",$base);
	if($foto != "none"){
		$fp = fopen($foto,"rb");
		$contenido = fread($fp,$fotoTamanio);
		$contenido = addslashes($contenido);
		fclose($fp);
		
	}
	
	$cadena= "INSERT INTO persona(apellido, nombre, usuario, edad, foto) VALUES ('$ape','$nom', '$usu' ,'$ed','$contenido')";

	
	try {
		$resultado = mysqli_query($Conexion,$cadena);
		if ($resultado) {
			return true;
		}
		else{
			return false;
		}
	}catch(Exception $ex){
		return substr($e, 22, 41);
		echo "no se puedo hacer la alta al usuario correctamente";
	}

	if($resultado){
		print "se ha insertado un registro"."<br>";
	}else{
		print "NO se ha generado un registro"."<br>";
	}
	
	echo "<h3>".$ape."</h3>". "<h3>".$nom."</h3>". "<h3>".$ed."</h3>";

}
else{
	print "No se pudo";
}

 ?>
<html lang="es">
	<head>
	<link rel="stylesheet" href="/css/respuestas.css">

	</head>
</html>
