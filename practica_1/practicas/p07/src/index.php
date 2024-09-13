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

    <h2>Ejercicio 3</h2>
    <p>Encontrar el primer número entero múltiplo de un número dado usando while y do-while.</p>
    <?php
        if(isset($_GET['multiplo'])) {
            $multiplo = $_GET['multiplo'];
            $resultadoWhile = encontrarMultiploConWhile($multiplo);
            $resultadoDoWhile = encontrarMultiploConDoWhile($multiplo);
            echo "<p>Primer múltiplo con while: $resultadoWhile</p>";
            echo "<p>Primer múltiplo con do-while: $resultadoDoWhile</p>";
        } else {
            echo "<p>Por favor, proporciona un valor para el parámetro 'multiplo' en la URL.</p>";
        }
    ?>

    <h2>Ejercicio 4</h2>
    <p>Crear un arreglo de caracteres ASCII y mostrarlo en una tabla.</p>
    <?php
        $arreglo = crearArregloAscii();
        echo "<table border='1'>";
        foreach ($arreglo as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>";
    ?>

    <h2>Ejercicio 5</h2>
    <h2>Ingrese su edad y sexo</h2>
    <form action="respuesta.php" method="post">
        Edad: <input type="number" name="edad" required><br>
        Sexo: 
        <select name="sexo" required>
            <option value="femenino">Femenino</option>
            <option value="masculino">Masculino</option>
        </select><br>
        <input type="submit" value="Enviar">
    </form>

    <h2>Ejercicio 6</h2>
    <h1>Consulta Vehicular</h1>

    <form action="consulta.php" method="POST">
        <label for="matricula">Consulta por matrícula:</label>
        <input type="text" id="matricula" name="matricula" placeholder="LLLNNNN">
        <input type="submit" value="Consultar">
    </form>

    <form action="consulta.php" method="POST">
        <input type="hidden" name="todos" value="true">
        <input type="submit" value="Mostrar todos los autos">
    </form>
</body>
</html>
