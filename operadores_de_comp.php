<?php // Operadores de comparación: ==, ===, !=, <>, !==, <, <=, >=, >
    
    $a = 10;
    $b = "10";
    $c = 7;

    // Son iguales, devuelve 1
    echo "$a y $b son iguales, devuelve: " . ($a == $b) . "\n";

    // No son idénticos, devuelve 0
    echo "$a y $b no son idénticos, devuelve: " . ($a === $b) . "\n";

    // Distintos (dos formas), devuelve 1 / 1
    echo "$a y $c no son iguales, devuelve: " . ($a != $c) . " / " . ($a <> $c);

    // Distintos, devuelve 1
    echo "\n$a > $c, devuelve: " . ($a > $c) . "\n";

?>