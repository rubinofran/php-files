<?php // Funciones

    // Ejemplo función 1:
    function sum($a, $b) {
        return $a + $b;
    }

    $number_1 = 10;
    $number_2 = 5;
    $args1 = array($number_1, $number_2);
    echo "Array de valores:\n";
    print_r($args1);

    // Darán el mismo resultado
    echo "Diferentes implementaciones para una misma función:\n";
    $result = call_user_func('sum', $number_1, $number_2);
    echo "$number_1 + $number_2: " . $result . chr(10);
    $result = call_user_func_array('sum', $args1);
    echo "$number_1 + $number_2: " . $result . chr(10);

    // Ejemplo función 2 (utilizando func_num_args):
    function qty_args() {
        $qty_args_number = func_num_args();
        echo "La función recibe $qty_args_number argumentos\n";
    }
    echo "Argumentos: 2, array(), 3, 4 y \"asd\"\n";
    qty_args(2, array(), 3, 4, "asd");

    // Ejemplo función 3 (utilizando func_get_args):
    function args_to_array($ar1, $ar2, $ar3) {
        global $args2;
        $args2 = func_get_args();
    }
    echo "Argumentos: 1, 2 y 3\n";
    args_to_array(1, 2, 3);
    echo "Nuevo arreglo:\n";
    print_r($args2);

    // Ejemplo función 4 (utilizando func_get_arg):
    function array_arg_two($ar1, $ar2, $ar3) {
        echo "El segundo argumento introducido fue: " . func_get_arg(1);
    }
    echo "Argumentos: 3, 4 y 5\n";
    array_arg_two(3, 4, 5);

    // Ejemplo función 5 (utilizando is_callable):
    function hello() {
        echo "Hola\n";
    }

    echo "\n\n";
    function call_function($function) {
        if(is_callable($function)) {
            echo "La funcion existe:\n"; 
            call_user_func($function);
        } else {
            echo "La funcion no existe\n";
        }
    }
    // Existe
    call_function('hello');
    // Imprime que no existe
    call_function('asdasd');

?>