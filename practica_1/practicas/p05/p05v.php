<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 5 PHP</title>
</head>
<body>
    <h1>Práctica 5 PHP</h1>

    <!-- Ejercicio 1 -->
    <h2>Ejercicio 1: Variables Válidas</h2>
    <pre>
    $_myvar, $_7var, $myvar, $var7, $_element1 son variables válidas.
$house*5 es inválido porque contiene un carácter no permitido (*).
string(7) "Válido"
string(7) "Válido"
string(7) "Válido"
string(7) "Válido"
string(7) "Válido"
    </pre>

    <!-- Ejercicio 2 -->
    <h2>Ejercicio 2: Asignación y Referencias</h2>
    <pre>
    Valores iniciales: $a = ManejadorSQL, $b = MySQL, $c = ManejadorSQL
Valores después de las asignaciones: $a = PHP server, $b = PHP server, $c = PHP server
Al reasignar $a a 'PHP server', como $c estaba referenciado a $a, también se actualiza el valor de $c.
    </pre>

    <!-- Ejercicio 3 -->
    <h2>Ejercicio 3: Evolución de Variables</h2>
    <pre>
    <br><b>Warning</b>: A non-numeric value encountered in <b>C:\xampp\htdocs\tecweb\practica_1\practicas\p05\index.php</b> on line <b>60</b><br>
    <br><b>Warning</b>: A non-numeric value encountered in <b>C:\xampp\htdocs\tecweb\practica_1\practicas\p05\index.php</b> on line <b>62</b><br>
Evolución de las variables:
string(5) "MySQL"
array(1) {
  [0]=>
  &string(5) "MySQL"
}
int(250)
int(50)
    </pre>

    <!-- Ejercicio 4 -->
    <h2>Ejercicio 4: Uso de $GLOBALS</h2>
    <pre>
    <br><b>Warning</b>: A non-numeric value encountered in <b>C:\xampp\htdocs\tecweb\practica_1\practicas\p05\index.php</b> on line <b>80</b><br>
    <br><b>Warning</b>: A non-numeric value encountered in <b>C:\xampp\htdocs\tecweb\practica_1\practicas\p05\index.php</b> on line <b>82</b><br>
    <br><b>Warning</b>: Only the first byte will be assigned to the string offset in <b>C:\xampp\htdocs\tecweb\practica_1\practicas\p05\index.php</b> on line <b>83</b><br>
Usando $GLOBALS para acceder a las variables:
string(21) "MHP55a version de PHP"
string(21) "MHP55a version de PHP"
int(250)
int(50)
    </pre>

    <!-- Ejercicio 5 -->
    <h2>Ejercicio 5: Conversiones de Tipos</h2>
    <pre>
    Conversión de tipos:
string(3) "9E3"
int(7)
float(9000)
    </pre>

    <!-- Ejercicio 6 -->
    <h2>Ejercicio 6: Valores Booleanos</h2>
    <pre>
    Valores booleanos:
string(1) "0"
string(4) "TRUE"
bool(false)
bool(true)
bool(false)
bool(true)
Valores booleanos de $c y $e usando echo:
c: FALSE
e: FALSE
    </pre>

    <!-- Ejercicio 7 -->
    <h2>Ejercicio 7: Información del Servidor y Cliente</h2>
    <pre>
    Versión de Apache y PHP: Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.0.30
Nombre del sistema operativo (servidor): WINNT
Idioma del navegador (cliente): es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3
    </pre>
    <p>
   <a href="https://validator.w3.org/check?uri=referer">
      <img src="https://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
   </a>
</p>

</body>
</html>
