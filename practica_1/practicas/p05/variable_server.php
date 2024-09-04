<!DOCTYPE html>
<html>
<head>
    <title>Información del Servidor y Cliente</title>
</head>
<body>
    <h2>Información del Servidor y Cliente</h2>
    <?php
    // a. Versión de Apache y PHP
    echo "<p><strong>Versión de Apache:</strong> " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
    //para obtener la cadena que contiene la version del servidor web, incluyendo la version de Apache

    echo "<p><strong>Versión de PHP:</strong> " . phpversion() . "</p>";
    //para obtener la version acutal de PHP en ejecucion

    // b. Nombre del sistema operativo (servidor)
    echo "<p><strong>Nombre del sistema operativo (servidor):</strong> " . php_uname('s') . "</p>";
    //para obtener el nombre del sistema operativo del servidor 

    // c. Idioma del navegador (cliente)
    $idioma = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    echo "<p><strong>Idioma del navegador (cliente):</strong> " . $idioma . "</p>";
    //para obtener la informacio sobre los idiomas aceptados por el navegador del cliente
    ?>
</body>
</html>
