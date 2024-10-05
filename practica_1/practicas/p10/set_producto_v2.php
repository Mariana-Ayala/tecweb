<?php
// Habilitar la visualización de errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Conexión a la base de datos
@$link = new mysqli('localhost', 'root', 'Retosvergas10*', 'marketzone');

// Comprobar la conexión
if ($link->connect_errno) {
    die('Falló la conexión: '.$link->connect_error.'<br/>');
}

// Capturar datos del formulario y sanitizar los inputs
$nombre = $link->real_escape_string($_POST['nombre']);
$marca  = $link->real_escape_string($_POST['marca']);
$modelo = $link->real_escape_string($_POST['modelo']);
$precio = floatval($_POST['precio']); // Asegurarse que sea un número flotante
$detalles = $link->real_escape_string($_POST['detalles']);
$unidades = intval($_POST['unidades']); // Asegurarse que sea un número entero
$imagen   = $link->real_escape_string($_POST['imagen']);

// Preparar la consulta
$sql = "INSERT INTO productos (nombre, marca, modelo, precio, detalles, unidades, imagen) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";

// Preparar el statement
if ($stmt = $link->prepare($sql)) {
    // Enlazar los parámetros (s: string, d: double, i: integer)
    $stmt->bind_param('sssdsis', $nombre, $marca, $modelo, $precio, $detalles, $unidades, $imagen);
    
    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Mensaje de éxito
        echo 'Producto insertado con ID: '.$stmt->insert_id;
        
        // Redirigir a una página de éxito
        // header("Location: success.php");
        
        // O simplemente un mensaje de éxito en la misma página:
        echo "<p>Producto registrado exitosamente.</p>";
        echo "<a href='formulario.productos.html'>Registrar otro producto</a>";
    } else {
        // Mostrar error si la consulta falla
        echo 'Error al insertar el producto: '.$stmt->error;
    }
    
    // Cerrar el statement
    $stmt->close();
} else {
    // Mostrar error al preparar la consulta
    echo 'Error al preparar la consulta: '.$link->error;
}

// Cerrar la conexión
$link->close();
?>
