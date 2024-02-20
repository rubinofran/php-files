<?php // Pruebas 1

    // Mala práctica que reduce el rendimiento
    $str = "mor";
    $str .= "feo";
    // Imprime morfeo
    echo "$str\n";

    // Operadores aritmeticos + - / * %
    $a = 12;
    $b = 3;
    echo "$a / $b = " . ($a / $b) ."\n";

    // Se puede operar con números expresados como cadenas
    $c = "12";
    $d = "3";
    echo "Sean las variables:\n";
    var_dump($c);
    var_dump($d);
    echo "La división entre las mismas da como resultado " . ($c / $d) . "\n";

    // Conversión de tipo
    $number = 17.5;
    echo "El valor de la variable es $number, var_dump devuelve:\n";
    var_dump($number);
    echo "Se setea como tipo entero, var_dump devuelve:\n";
    settype($number, "integer"); // funciona también con int
    var_dump($number);

    // Curiosidad
    $e = "33 manzanas"; 
    $f = 10;
    $g = "manzanas 33"; 

    settype($e, "integer");
    echo ($e + $f); // imprime la suma de 33 y 10
    
    echo "\n";
    
    settype($g, "integer");
    echo ($g + $f); // imprime 10

?>