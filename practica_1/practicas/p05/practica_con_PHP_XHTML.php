<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8" />    
    <title>Práctica con PHP y XHTML</title>
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

    <h2>Segunda Asignación</h2>
    <?php
    $a = "PHP server";
    $b = &$a;

    // Mostrar los contenidos después de la segunda asignación
    echo "<p>\$a = $a</p>";
    echo "<p>\$b = $b</p>";
    echo "<p>\$c = $c</p>";
    ?>

    <h2>Explicación</h2>
    <?php
    echo "<p>Después de la primera asignación, \$c es una referencia de \$a. Esto significa que cualquier cambio en \$a se refleja en \$c.</p>";
    echo "<p>Después de la segunda asignación, tanto \$a como \$b apuntan al mismo valor 'PHP server', y dado que \$c sigue siendo una referencia a \$a, también se actualiza a 'PHP server'.</p>";

    // Liberar variables
    unset($a, $b, $c);
    ?>
    </body>
    </html>

</body>
</html>
