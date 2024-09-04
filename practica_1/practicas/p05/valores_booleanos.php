<?php
$a = "0"; //contiene cadena 0, pero se evalua como false 

$b = "TRUE"; //contiene una cadena "TRUE" por lo que es TRUE 
//porque cualquier cadena no vacia es true

$c = FALSE; // ella misma lo dice FALSE

$d = ($a OR $b); //si al menos una variable es true, entonces es TRUE 

$e = ($a AND $c); //ambas deben ser true o false, en esta ocasion es FALSE

$f = ($a XOR $b); //si solo una de las variables es true, entonces sera TRUE
?>
