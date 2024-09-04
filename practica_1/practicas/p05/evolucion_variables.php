<!DOCTYPE html>
<html>
<head>
    <title>Evolución de Variables en PHP</title>
</head>
<body>
    <h2>Ejercicio 3: Evolución de Variables</h2>
    <?php
    $a = "PHP5"; //iniciamos la variable con la cadena "PHP5"
    echo "<p>\$a = $a</p>";

    $z[] = &$a; //creamos un arreglo, donde el primer elemento es una referencia a "$a"
    echo "<p>\$z[0] = {$z[0]}</p>";

    $b = "5a version de PHP"; //se asigna una cadena "5a version de PHP"
    echo "<p>\$b = $b</p>";

    $c = $b * 10; //multiplica la cadena de "$b" por 10
    //lo que nos dara como resultado 0 porque una cadena no se puede convertir a numeros 
    echo "<p>\$c = $c</p>";

    $a .= $b; //concatena el valor de la cadena de "$b" al final de "$a"
    //por lo que la nueva cadena "PHP5 5a version PHP"
    echo "<p>\$a .= \$b; ahora \$a = $a</p>";

    $b *= $c; //multiplica "$b" por "$c" que nos dara resultado 0
    //ya que "$c" es 0
    echo "<p>\$b *= \$c; ahora \$b = $b</p>";

    $z[0] = "MySQL"; // cambia el primer elemento del arrglo a "MySQL"
    echo "<p>\$z[0] = {$z[0]}</p>";

    // Mostrar todos los componentes del arreglo $z
    echo "<p>Contenido de \$z:</p>";
    print_r($z);

    ?>
</body>
</html>
