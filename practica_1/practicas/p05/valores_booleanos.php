<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 6: Valores Booleanos</title>
</head>
<body>
    <h2>Valores Booleanos de las Variables</h2>
    <?php
    $a = "0"; //contiene cadena 0, pero se evalua como false 

    $b = "TRUE"; //contiene una cadena "TRUE" por lo que es TRUE 
    //porque cualquier cadena no vacia es true

    $c = FALSE; // ella misma lo dice FALSE

    $d = ($a OR $b); //si al menos una variable es true, entonces es TRUE 

    $e = ($a AND $c); //ambas deben ser true o false, en esta ocasion es FALSE

    $f = ($a XOR $b); //si solo una de las variables es true, entonces sera TRUE

    // Mostrar valores booleanos
    echo "<p>var_dump(\$a): "; var_dump($a); echo "</p>";
    echo "<p>var_dump(\$b): "; var_dump($b); echo "</p>";
    echo "<p>var_dump(\$c): "; var_dump($c); echo "</p>";
    echo "<p>var_dump(\$d): "; var_dump($d); echo "</p>";
    echo "<p>var_dump(\$e): "; var_dump($e); echo "</p>";
    echo "<p>var_dump(\$f): "; var_dump($f); echo "</p>";

    // Transformar $c y $e a valores que se puedan mostrar con echo
    echo "<h3>Transformación de \$c y \$e:</h3>";
    echo "<p>\$c: " . ($c ? 'true' : 'false') . "</p>";
    echo "<p>\$e: " . ($e ? 'true' : 'false') . "</p>";
    ?>
</body>
</html>
