<?php
// Conexión a la base de datos
$link = new mysqli('localhost', 'root', 'Retosvergas10*', 'marketzone');

// Verificar la conexión
if ($link->connect_errno) {
    die('Falló la conexión: ' . $link->connect_error);
}

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger datos del formulario
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];
    $detalles = $_POST['detalles'];
    $unidades = $_POST['unidades'];
    $imagen = $_POST['imagen'];

    // Insertar el producto en la base de datos
    $sql = "INSERT INTO productos (nombre, marca, modelo, precio, detalles, unidades, imagen) 
            VALUES ('$nombre', '$marca', '$modelo', $precio, '$detalles', $unidades, '$imagen')";
    
    if ($link->query($sql) === TRUE) {
        echo "<h3>Producto registrado exitosamente.</h3>";
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }

    $link->close();
}
?>

<!-- Opciones después de registrar el producto -->
<h4>¿Qué te gustaría hacer ahora?</h4>
<ul>
    <li><a href="formulario_productos.html">Registrar un nuevo producto</a></li>
    <li><a href="get_productos_vigentes_v2.php">Ver productos vigentes</a></li>
    <li><a href="get_productos_xhtml_v2.php?tope=50">Ver todos los productos</a></li>
</ul>
