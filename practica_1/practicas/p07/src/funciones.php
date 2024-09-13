<?php
// es múltiplo de 5 y 7
function esMultiploDe5Y7($numero) {
    return $numero % 5 == 0 && $numero % 7 == 0;
}
// secuencia impar, par, impar
function generarSecuenciaImparParImpar() {
    $matriz = [];
    $iteraciones = 0;

    do {
        $iteraciones++;
        $fila = [];
        for ($i = 0; $i < 3; $i++) {
            $fila[] = rand(1, 1000);
        }
        $matriz[] = $fila;
    } while (!($matriz[count($matriz) - 1][0] % 2 != 0 &&
               $matriz[count($matriz) - 1][1] % 2 == 0 &&
               $matriz[count($matriz) - 1][2] % 2 != 0));

    return [$matriz, $iteraciones];
}
//usando while
function encontrarMultiploConWhile($numero) {
    do {
        $aleatorio = rand(1, 1000);
    } while ($aleatorio % $numero != 0);

    return $aleatorio;
}
//usando do-while
function encontrarMultiploConDoWhile($numero) {
    $aleatorio = rand(1, 1000);
    while ($aleatorio % $numero != 0) {
        $aleatorio = rand(1, 1000);
    }

    return $aleatorio;
}

// Función para crear un arreglo de caracteres ASCII
function crearArregloAscii() {
    $arreglo = [];
    for ($i = 97; $i <= 122; $i++) {
        $arreglo[$i] = chr($i);
    }

    return $arreglo;
}
?>

