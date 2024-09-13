<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Edad y Sexo</title>
</head>
<body>
<h2>Ejercicio 5</h2>
    <h2>Resultado</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];

        if ($sexo === 'femenino' && $edad >= 18 && $edad <= 35) {
            echo '<p>Bienvenida, usted está en el rango de edad permitido.</p>';
        } else {
            echo '<p>Lo siento, no cumple con los criterios de edad y sexo.</p>';
        }
    } else {
        echo '<p>No se ha enviado el formulario.</p>';
    }
    ?>
</body>
</html>
