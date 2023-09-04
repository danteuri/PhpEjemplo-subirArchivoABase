<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $allowed_pages = [
        'altas',
        'bajas',
        'form-altas',
        'form-bajas',
        'form-modificacion',
        'listar',
        'menu',
        'modificacion'
    ];

    if (in_array($page, $allowed_pages)) {
        $php_file = "php/$page.php";
        if (file_exists($php_file)) {
            include $php_file;
        } else {
            echo "Archivo no encontrado.";
        }
    } else {
        echo "Acceso no autorizado.";
    }
} else {
    echo "Página de inicio";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu general</title>
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>
    <div class="header">
        <h3 class="titulo">Menu General</h3>

        <div class="menu">       

        <a href="?page=form-altas">Alta</a><br>
        <a href="?page=form-bajas">Bajas</a><br>
        <a href="?page=form-modificacion">Modificaciones</a><br>
        <a href="?page=listar">Listado de personas</a><br>


        </div>
    </div>
</body>
</html>