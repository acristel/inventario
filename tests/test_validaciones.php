<?php

require_once __DIR__ . '/../src/validaciones.php';

$casos = [
    ["Teclado", true],
    ["",false],
    ["   ", false],
    ["Mouse", true]
];
$pasaron=0;
$faltaron=0;

foreach ($casos as [$entrada, $esperado]) {
    $obtenido = validarNombreProducto($entrada);
    if ($obtenido === $esperado) {
        $pasaron++;

        echo "PASS - Nombre: '$entrada'\n";
    } else {
        echo "FAIL - Nombre: '$entrada'\n";
        $faltaron++;
    }
}

// Validaciones de cantidad
$casosCantidad = [
    [10, true],
    [0, true],
    [-5, false],
    ["abc", false]
];

foreach ($casosCantidad as [$entrada, $esperado]) {
    $obtenido = validarCantidadProducto($entrada);
    if ($obtenido === $esperado) {
        $pasaron++;

        echo "PASS - Cantidad: $entrada\n";
    } else {
        echo "FAIL - Cantidad: $entrada\n";
        $faltaron++;
    }
}

echo "\nTotal PASS: $pasaron\n";
echo "\nTotal FAIL: $faltaron\n";