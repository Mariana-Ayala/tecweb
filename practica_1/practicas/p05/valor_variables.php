<?php
$a = "7 personas"; // a "$a" le agregamos la cadena "7 personas"

$b = (integer) $a; //se convierte en un entero usando (integer).
// se tomará el primer valor numérico en la cadena y lo convertirá ignorando el resto.
//Por lo tanto, $b será 7.

$a = "9E3"; //se le reasigna la cadena "9E3" que es una expresion cientifica
//9*10^3

$c = (double) $a; //se convierte en un double 
//por lo que imprimira 9000.0


?>
