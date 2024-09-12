<?php
include 'C:\xampp\htdocs\tecweb\practica_1\practicas\p07\src\funciones.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 7</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <?php
        if(isset($_GET['numero'])) {
            $num = $_GET['numero'];
            if (esMultiploDe5Y7($num)) {
                echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
            } else {
                echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
            }
        }
    ?>

    <h2>Ejercicio 2</h2>
    <p>Generar repetitivamente 3 números aleatorios hasta obtener una secuencia impar, par, impar.</p>
    <?php
        list($matriz, $iteraciones) = generarSecuenciaImparParImpar();
        echo "<p>$iteraciones iteraciones y " . (3 * $iteraciones) . " números obtenidos.</p>";
        echo "<table border='1'>";
        foreach ($matriz as $fila) {
            echo "<tr>";
            foreach ($fila as $numero) {
                echo "<td>$numero</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
