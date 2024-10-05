<?php
// Conexión a la base de datos
$link = mysqli_connect("localhost", "root", "Retosvergas10*", "marketzone");

// Verifica si se ha pasado el ID del producto por la URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para obtener los datos del producto
    $sql = "SELECT * FROM productos WHERE id=$id";
    $result = mysqli_query($link, $sql);

    if ($result) {
        $producto = mysqli_fetch_assoc($result);
    } else {
        die("Producto no encontrado.");
    }
} else {
    die("ID del producto no especificado.");
}

mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <script>
        function validarFormulario() {
            var nombre = document.getElementById("nombre").value;
            if (nombre === "" || nombre.length > 100) {
                alert("El nombre es requerido y debe tener 100 caracteres o menos.");
                return false;
            }

            var marca = document.getElementById("marca").value;
            if (marca === "") {
                alert("Debe seleccionar una marca.");
                return false;
            }

            var modelo = document.getElementById("modelo").value;
            var modeloRegex = /^[a-zA-Z0-9]*$/;
            if (modelo === "" || !modeloRegex.test(modelo) || modelo.length > 25) {
                alert("El modelo es requerido, debe ser alfanumérico y tener 25 caracteres o menos.");
                return false;
            }

            var precio = parseFloat(document.getElementById("precio").value);
            if (isNaN(precio) || precio <= 99.99) {
                alert("El precio es requerido y debe ser mayor a 99.99.");
                return false;
            }

            var unidades = parseInt(document.getElementById("unidades").value);
            if (isNaN(unidades) || unidades < 0) {
                alert("Las unidades son requeridas y deben ser un número mayor o igual a 0.");
                return false;
            }

            var detalles = document.getElementById("detalles").value;
            if (detalles.length > 250) {
                alert("Los detalles deben tener 250 caracteres o menos.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <h1>Editar Producto</h1>
    <form action="update_producto.php" method="POST" onsubmit="return validarFormulario()">
        <input type="hidden" name="id" value="<?= $producto['id'] ?>">

        <label for="nombre">Nombre del Producto:</label>
        <input type="text" id="nombre" name="nombre" value="<?= $producto['nombre'] ?>" required><br><br>

        <label for="marca">Marca:</label>
        <select id="marca" name="marca" required>
            <option value="Samsung" <?= $producto['marca'] == 'Samsung' ? 'selected' : '' ?>>Samsung</option>
            <option value="Apple" <?= $producto['marca'] == 'Apple' ? 'selected' : '' ?>>Apple</option>
            <option value="Sony" <?= $producto['marca'] == 'Sony' ? 'selected' : '' ?>>Sony</option>
            <option value="LG" <?= $producto['marca'] == 'LG' ? 'selected' : '' ?>>LG</option>
        </select><br><br>

        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" value="<?= $producto['modelo'] ?>" required><br><br>

        <label for="precio">Precio:</label>
        <input type="number" step="0.01" id="precio" name="precio" value="<?= $producto['precio'] ?>" required><br><br>

        <label for="detalles">Detalles:</label>
        <textarea id="detalles" name="detalles"><?= $producto['detalles'] ?></textarea><br><br>

        <label for="unidades">Unidades disponibles:</label>
        <input type="number" id="unidades" name="unidades" value="<?= $producto['unidades'] ?>" required><br><br>

        <label for="imagen">Imagen (ruta):</label>
        <input type="text" id="imagen" name="imagen" value="<?= $producto['imagen'] ?>"><br><br>

        <input type="submit" value="Actualizar Producto">
    </form>
</body>
</html>
