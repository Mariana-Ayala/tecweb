<!DOCTYPE html>
<html>
<head>
    <title>Acceso a Variables con GLOBALS</title>
</head>
<body>
    <h2>Ejercicio 4: Acceso a Variables con GLOBALS</h2>
    <?php
    // Reasignar valores para usar GLOBALS
    $GLOBALS['a'] = "PHP5";
    $GLOBALS['z'][0] = &$GLOBALS['a'];
    $GLOBALS['b'] = "5a version de PHP";

    // Convertir $b a un valor numérico antes de la operación
    $GLOBALS['c'] = is_numeric($GLOBALS['b']) ? $GLOBALS['b'] * 10 : 0;
    echo "<p>\$GLOBALS['c'] = " . $GLOBALS['c'] . "</p>";

    // Concatenar $b a $a
    $GLOBALS['a'] .= $GLOBALS['b'];
    echo "<p>\$GLOBALS['a'] .= \$GLOBALS['b']; ahora \$GLOBALS['a'] = " . $GLOBALS['a'] . "</p>";

    // Multiplicar $b por $c (donde $b se convierte a un valor numérico si es posible)
    $GLOBALS['b'] = is_numeric($GLOBALS['b']) ? $GLOBALS['b'] * $GLOBALS['c'] : 0;
    echo "<p>\$GLOBALS['b'] *= \$GLOBALS['c']; ahora \$GLOBALS['b'] = " . $GLOBALS['b'] . "</p>";

    $GLOBALS['z'][0] = "MySQL";
    echo "<p>\$GLOBALS['z'][0] = " . $GLOBALS['z'][0] . "</p>";

    // Mostrar todos los componentes del arreglo $GLOBALS['z']
    echo "<p>Contenido de \$GLOBALS['z']:</p>";
    print_r($GLOBALS['z']);
    ?>
</body>
</html>
