<!DOCTYPE html>
<html>
<head>
    <title>PHP Variables</title>
</head>
<body>
    <?php

//$_myvar, $_7var, myvar, $myvar, $var7, $_element1, $house*5

    //las variables de php deben empezar siempre con $, seguido de un _ o una letra
    //nunca por un numero

    $_myvar = "Válida"; //porque empieza con $ seguido de un _ 

    $_7var = "Válida"; //porque empieza con un $ seguido de un _ auqnue despues tiene un numero
    //no importa que tenga un numero, ya que es despues del _

    // myvar = No válida porque no empieza con $

    $myvar = "Válida"; // porque empieza con $ seguido de una letra

    $var7 = "Válida"; // porque comieza con $ seguido de una letra auqnue despues tenga un numero

    $_element1 = "Válida"; //porque empeiza con $ seguido con _ y despues letrasby al final numeros 

    // $house*5 = No válida porque contiene un simbolo invalido *

    // Mostrar los resultados
    echo "<p>\$_myvar es $_myvar</p>";
    echo "<p>\$_7var es $_7var</p>";
    echo "<p>\$myvar es $myvar</p>";
    echo "<p>\$var7 es $var7</p>";
    echo "<p>\$_element1 es $_element1</p>";

    unset($_myvar, $_7var, $myvar, $var7, $_element1);
    ?>
</body>
</html>
