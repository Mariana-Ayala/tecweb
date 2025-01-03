<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Productos Vigentes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>
<body>
    <h3>PRODUCTOS VIGENTES</h3>
    <br/>

    <?php
    // Crear objeto de conexión
    @$link = new mysqli('localhost', 'root', 'Retosvergas10*', 'marketzone');	

    // Comprobar la conexión
    if ($link->connect_errno) {
        die('Falló la conexión: '.$link->connect_error.'<br/>');
    }

    // Ejecutar la consulta para obtener productos que no están eliminados
    if ($result = $link->query("SELECT * FROM productos WHERE eliminado = 0")) {
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        $result->free();
    }

    $link->close();
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
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay productos vigentes.</p>
    <?php endif; ?>

</body>
</html>
