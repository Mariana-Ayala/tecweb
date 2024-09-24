<?php
// Conectar a la base de datos
@$link = new mysqli('localhost', 'root', 'Retosvergas10*', 'marketzone');

// Comprobar la conexión
if ($link->connect_errno) {
    die('Falló la conexión: '.$link->connect_error.'<br/>');
}

// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$precio = $_POST['precio'];
$detalles = $_POST['detalles'];
$unidades = $_POST['unidades'];
$imagen = $_POST['imagen'];

// Validar que el nombre, marca y modelo no existan ya en la base de datos
$sql_check = "SELECT * FROM productos WHERE nombre = ? AND marca = ? AND modelo = ?";
$stmt_check = $link->prepare($sql_check);
$stmt_check->bind_param("sss", $nombre, $marca, $modelo);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows > 0) {
    // Si ya existe el producto, mostrar un mensaje de error
    echo "El producto con nombre '$nombre', marca '$marca' y modelo '$modelo' ya existe en la base de datos.";
} else {
    // Si no existe, insertar el nuevo producto
    $sql_insert = "INSERT INTO productos (nombre, marca, modelo, precio, detalles, unidades, imagen) 
                   VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt_insert = $link->prepare($sql_insert);
    $stmt_insert->bind_param("sssdsis", $nombre, $marca, $modelo, $precio, $detalles, $unidades, $imagen);
    
    if ($stmt_insert->execute()) {
        echo "Producto insertado exitosamente:<br>";
        echo "Nombre: $nombre<br>";
        echo "Marca: $marca<br>";
        echo "Modelo: $modelo<br>";
        echo "Precio: $precio<br>";
        echo "Detalles: $detalles<br>";
        echo "Unidades: $unidades<br>";
        echo "Imagen: <img src='$imagen' alt='Imagen del producto' width='200'><br>";
    } else {
        echo "Error al insertar el producto: " . $stmt_insert->error;
    }
}

// Cerrar la conexión
$link->close();
?>
