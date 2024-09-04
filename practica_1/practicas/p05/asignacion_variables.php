<!DOCTYPE html>
<html>
<head>
    <title>Asignación de Variables y Referencias en PHP</title>
</head>
<body>
    <h2>Asignación Inicial</h2>
    <?php
    $a = "ManejadorSQL";
    $b = 'MySQL';
    $c = &$a;

    // Mostrar los contenidos iniciales
    echo "<p>\$a = $a</p>";
    echo "<p>\$b = $b</p>";
    echo "<p>\$c = $c</p>";
    ?>
</body>
</html>
