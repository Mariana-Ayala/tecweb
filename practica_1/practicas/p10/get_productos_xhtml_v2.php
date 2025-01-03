<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>
<body>
    <h3>PRODUCTOS</h3>
    <br/>

    <?php
    if(isset($_GET['tope'])) {
        $tope = $_GET['tope'];
    } else {
        die('Parámetro "tope" no detectado...');
    }

    if (!empty($tope)) {
        /** SE CREA EL OBJETO DE CONEXION */
        @$link = new mysqli('localhost', 'root', 'Retosvergas10*', 'marketzone');

        /** comprobar la conexión */
        if ($link->connect_errno) {
            die('Falló la conexión: '.$link->connect_error.'<br/>');
        }

        /** Ejecuta la consulta para productos con unidades <= al tope */
        if ($result = $link->query("SELECT * FROM productos WHERE unidades <= $tope")) {
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            $result->free();
        }

        $link->close();
    }
    ?>

    <?php if(isset($rows) && count($rows) > 0): ?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Unidades</th>
                    <th scope="col">Detalles</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Acciones</th> <!-- Nueva columna -->
                </tr>
            </thead>
            <tbody>
                <?php foreach($rows as $row): ?>
                <tr>
                    <th scope="row"><?= $row['id'] ?></th>
                    <td><?= $row['nombre'] ?></td>
                    <td><?= $row['marca'] ?></td>
                    <td><?= $row['modelo'] ?></td>
                    <td><?= $row['precio'] ?></td>
                    <td><?= $row['unidades'] ?></td>
                    <td><?= utf8_encode($row['detalles']) ?></td>
                    <td><img src="<?= $row['imagen'] ?>" alt="Imagen del producto" width="100"/></td>
                    <td>
                        <a href="formulario_productos_v2.php?id=<?= $row['id'] ?>" class="btn btn-warning">Modificar</a>
                    </td> <!-- Enlace para modificar -->
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay productos con menos o igual de <?= $tope ?> unidades.</p>
    <?php endif; ?>

</body>
</html>
