<?php
include_once __DIR__.'/database.php';

// Leer el cuerpo de la solicitud
$data = json_decode(file_get_contents("php://input"), true);

$response = array('status' => 'error', 'message' => 'Error al actualizar el producto');

if (isset($data['id']) && isset($data['producto'])) {
    $id = $data['id'];
    $producto = $data['producto'];

    // Validaciones
    if (strlen($producto['detalles']) > 250) {
        $response['message'] = 'Los detalles deben tener 250 caracteres o menos.';
        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }

    if ($producto['precio'] < 99) {
        $response['message'] = 'El precio debe ser mayor o igual a 99.';
        echo json_encode($response, JSON_PRETTY_PRINT);
        exit;
    }
    
    // Preparar la consulta
    $sql = "UPDATE productos SET 
        nombre = '{$producto['nombre']}', 
        marca = '{$producto['marca']}', 
        modelo = '{$producto['modelo']}', 
        precio = {$producto['precio']}, 
        detalles = '{$producto['detalles']}', 
        unidades = {$producto['unidades']}, 
        imagen = '{$producto['imagen']}' 
        WHERE id = {$id}";

    // Ejecutar la consulta
    if ($conexion->query($sql)) {
        $response['status'] = 'success';
        $response['message'] = 'Producto actualizado correctamente';
    } else {
        $response['message'] = 'Error en la consulta: ' . mysqli_error($conexion);
    }
}

$conexion->close();
echo json_encode($response, JSON_PRETTY_PRINT);
?>
