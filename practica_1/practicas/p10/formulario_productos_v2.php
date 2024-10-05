<?php
// Conexión a la base de datos
@$link = new mysqli('localhost', 'root', 'Retosvergas10*', 'marketzone');

// Comprobar conexión
if ($link->connect_errno) {
    die('Falló la conexión: '.$link->connect_error.'<br/>');
}

// Inicializar variables para el formulario
$id = $nombre = $marca = $modelo = $precio = $detalles = $unidades = $imagen = "";
$esModificacion = false;

// Si hay un ID en la URL, significa que estamos en modo modificación
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $esModificacion = true;
    
    // Consultar los datos actuales del producto para precargar el formulario
    $result = $link->query("SELECT * FROM productos WHERE id = $id");
    if ($result->num_rows > 0) {
        $producto = $result->fetch_assoc();
        $nombre = $producto['nombre'];
        $marca = $producto['marca'];
        $modelo = $producto['modelo'];
        $precio = $producto['precio'];
        $detalles = utf8_encode($producto['detalles']);
        $unidades = $producto['unidades'];
        $imagen = $producto['imagen'];
    }
    $result->free();
}

// Cerrar la conexión
$link->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $esModificacion ? "Modificar Producto" : "Registrar Producto" ?></title>
    <script>
        function validarFormulario() {
            // Validación del nombre
            var nombre = document.getElementById("nombre").value;
            if (nombre === "" || nombre.length > 100) {
                alert("El nombre es requerido y debe tener 100 caracteres o menos.");
                return false;
            }

            // Validación de la marca
            var marca = document.getElementById("marca").value;
            if (marca === "") {
                alert("Debe seleccionar una marca.");
                return false;
            }

            // Validación del modelo
            var modelo = document.getElementById("modelo").value;
            var modeloRegex = /^[a-zA-Z0-9]*$/;
            if (modelo === "" || !modeloRegex.test(modelo) || modelo.length > 25) {
                alert("El modelo es requerido, debe ser alfanumérico y tener 25 caracteres o menos.");
                return false;
            }

            // Validación del precio
            var precio = parseFloat(document.getElementById("precio").value);
            if (isNaN(precio) || precio <= 99.99) {
                alert("El precio es requerido y debe ser mayor a 99.99.");
                return false;
            }

            // Validación de los detalles (opcional)
            var detalles = document.getElementById("detalles").value;
            if (detalles.length > 250) { // Solo debe restringir cuando excede los 250 caracteres
                alert("Los detalles deben tener 250 caracteres o menos.");
                return false;
            }

            // Validación de las unidades
            var unidades = parseInt(document.getElementById("unidades").value);
            if (isNaN(unidades) || unidades < 0) {
                alert("Las unidades son requeridas y deben ser un número mayor o igual a 0.");
                return false;
            }

            // Validación de la imagen (opcional)
            var imagen = document.getElementById("imagen").value;
            if (imagen === "") {
                document.getElementById("imagen").value = "img/imagen.png"; // Ruta por defecto
            }

            return true;
        }
    </script>
</head>
<body>
    <h1><?= $esModificacion ? "Modificar Producto" : "Registrar Producto" ?></h1>
    <form action="<?= $esModificacion ? 'update_producto.php' : 'set_producto_v2.php' ?>" method="POST" onsubmit="return validarFormulario()">
        <!-- Si estamos en modo modificación, incluir un campo oculto con el ID -->
        <?php if ($esModificacion): ?>
            <input type="hidden" name="id" value="<?= $id ?>">
        <?php endif; ?>

        <label for="nombre">Nombre del Producto:</label>
        <input type="text" id="nombre" name="nombre" value="<?= $nombre ?>" required><br><br>

        <label for="marca">Marca:</label>
        <select id="marca" name="marca" required>
            <option value="">Seleccione una marca</option>
            <option value="Samsung" <?= $marca == 'Samsung' ? 'selected' : '' ?>>Samsung</option>
            <option value="Apple" <?= $marca == 'Apple' ? 'selected' : '' ?>>Apple</option>
            <option value="Sony" <?= $marca == 'Sony' ? 'selected' : '' ?>>Sony</option>
            <option value="LG" <?= $marca == 'LG' ? 'selected' : '' ?>>LG</option>
        </select><br><br>

        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" value="<?= $modelo ?>" required><br><br>

        <label for="precio">Precio:</label>
        <input type="number" step="0.01" id="precio" name="precio" value="<?= $precio ?>" required><br><br>

        <label for="detalles">Detalles:</label>
        <textarea id="detalles" name="detalles"><?= $detalles ?></textarea><br><br>

        <label for="unidades">Unidades disponibles:</label>
        <input type="number" id="unidades" name="unidades" value="<?= $unidades ?>" required><br><br>

        <label for="imagen">Imagen (ruta):</label>
        <input type="text" id="imagen" name="imagen" value="<?= $imagen ?: 'img/imagen.png' ?>"><br><br>

        <input type="submit" value="<?= $esModificacion ? "Guardar Cambios" : "Registrar Producto" ?>">
    </form>
</body>
</html>
