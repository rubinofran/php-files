<?php // Condicionales if, else, else if

    // Una estructura de control es un bloque de código que permite tomar desiciónes sobre el código existente
    // if(condición A) {
    //     algoritmo o respuesta si se cumple la condición A
    // } else if(condición B) {
    //     algoritmo o respuesta si se cumple la condición B
    // } else {
    //     algoritmo o respuesta si no se cumplen las condiciónes anteriores
    // }

    $a = 10;
    $b = "10";

    if($a == $b) {
        echo "$a y $b son iguales\n";
    } else {
        echo "$a y $b no son iguales\n";
    }

    if($a !== $b){
        echo "Pero no idénticos.\n";
    }

?>