<?php // do while y for

    $a = 5;
    $b = 5;

    // Se suma el valor de $a al total de $b (y se imprime el resultado) siempre que se cumpla la condición
    do{
        echo $b . chr(9);
        $b = $b + $a;
    } while($b < 40);

    echo chr(10);

    // Se resta el valor de $a al total de $b (y se imprime el resultado) siempre que se cumpla la condición
    for( /* nada en este caso */ ; $b > 0 ; $b = $b - $a) {
        echo $b . chr(9);
    }

?>