<?php // Operadores lógicos: and ó &&, or ó ||, xor, ! 

    $t = true; // o 1
    $f = 0; // o false

    // Negado
    echo "\n!$f: " . !$f . "\n";

    if($t or $f) { // Es válido utilizar ||
        echo "\n1 || 0: VERDERO\n";
    }

    if(!($t and $f)) { // Es válido utilizar &&, se utiliza la negación "!" para imprimir el resultado
        echo "\n1 && 0: FALSO\n";
    }

    // Pruebas xor 
    if($t xor $f) { 
        echo "\n1 xor 0: VERDERO\n";
    }
    if(!($t xor $t)) { // Se utiliza la negación "!" para imprimir el resultado
        echo "\n1 xor 1: FALSO\n\n";
    }

?>