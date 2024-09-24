<?php
// Conexión a la base de datos
@$link = new mysqli('localhost', 'root', '12345678a', 'marketzone');	

// Comprobar la conexión
if ($link->connect_errno) {
    die('Falló la conexión: '.$link->connect_error.'<br/>');
}

// Capturar datos del formulario
$nombre = $_POST['nombre'];
$marca  = $_POST['marca'];
$modelo = $_POST['modelo'];
$precio = $_POST['precio'];
$detalles = $_POST['detalles'];
$unidades = $_POST['unidades'];
$imagen   = $_POST['imagen'];

// Comentar la consulta anterior
// $sql = "INSERT INTO productos VALUES (null, '{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$imagen}')";

// Nueva consulta usando nombres de columnas
$sql = "INSERT INTO productos (nombre, marca, modelo, precio, detalles, unidades, imagen) 
        VALUES ('{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$imagen}')";

// Ejecutar la consulta
if ($link->query($sql)) {
    echo 'Producto insertado con ID: '.$link->insert_id;
} else {
    echo 'El Producto no pudo ser insertado =(';
}

$link->close();
?>
