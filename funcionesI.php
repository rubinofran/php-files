<?php // Funciones

    // Ejemplo función 1:
    function first_function() {
        echo "La primer función imprime este mensaje." . chr(10);
    }
    // Aplico la función 1:
    first_function();

    // Paso de variables por referencia, notar &
    $number = 13;
    echo "Antes de duplicar su valor, el número es: $number\n";
    // Ejemplo función 2:
    function second_function(&$n) {
        $n = $n * 2; // $n *= 2;
    }
    // Aplico la función 2:
    second_function($number);
    echo "Valor duplicado: $number\n";

    // Sin pasar la variable como referencia, ejemplo función 3:
    function divide_var() {
        global $number; // Busca esta variable global para modificarla
        $number = $number / 2; // $number /= 2;
    }
    // Aplico la función 3:
    divide_var();
    echo "Valor dividido por dos: $number\n";

    // Creando variables dentro de funciones, ejemplo función 4:
    function create_var($n) {
        global $new_var;
        $new_var = $n;
    }
    // Aplico la función 4:
    create_var(7);
    echo "Variable creada con valor: " . $new_var . chr(10);

    // Ejemplo función 5:
    $number_1 = 4;
    $number_2 = 5;

    function sum($a, $b) {
        // Primer implementación de de return;
        return $a + $b;
    }
    // Se imprime el resultado
    echo "$number_1 + $number_2: " . sum($number_1, $number_2) . chr(10);
    
    // Para llamar función existente
    $result = call_user_func('sum', $number_1, $number_2);
    // Imprime el mismo resultado
    echo "$number_1 + $number_2: " . $result . chr(10);

?>