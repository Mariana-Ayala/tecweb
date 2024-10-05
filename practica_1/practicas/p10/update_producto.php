<?php
// Conexión a la base de datos
$link = mysqli_connect("localhost", "root", "Retosvergas10*", "marketzone");

// Chequea la conexión
if ($link === false) {
    die("ERROR: No pudo conectarse con la base de datos. " . mysqli_connect_error());
}

// Verifica si se ha enviado el formulario con los datos del producto
if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['marca']) && isset($_POST['modelo']) && isset($_POST['precio']) && isset($_POST['unidades']) && isset($_POST['detalles'])) {
    // Recoge los datos del formulario
    $id = mysqli_real_escape_string($link, $_POST['id']);
    $nombre = mysqli_real_escape_string($link, $_POST['nombre']);
    $marca = mysqli_real_escape_string($link, $_POST['marca']);
    $modelo = mysqli_real_escape_string($link, $_POST['modelo']);
    $precio = mysqli_real_escape_string($link, $_POST['precio']);
    $unidades = mysqli_real_escape_string($link, $_POST['unidades']);
    $detalles = mysqli_real_escape_string($link, $_POST['detalles']);
    $imagen = mysqli_real_escape_string($link, $_POST['imagen']);

    // Ejecuta la actualización del producto
    $sql = "UPDATE productos SET nombre='$nombre', marca='$marca', modelo='$modelo', precio='$precio', unidades='$unidades', detalles='$detalles', imagen='$imagen' WHERE id=$id";

    if (mysqli_query($link, $sql)) {
        echo "Producto actualizado correctamente.";
    } else {
        echo "ERROR: No se pudo ejecutar la actualización: $sql. " . mysqli_error($link);
    }
} else {
    echo "ERROR: No se recibieron todos los datos necesarios.";
}

// Cierra la conexión
mysqli_close($link);
?>
