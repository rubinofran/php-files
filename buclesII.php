<?php // while

    // Asignación por referencia a todo el arreglo
    $names = array(0 => 'Javier', 1 => 'Osvaldo', 2 => 'Vito',);
    print_r($names);

    foreach($names as &$name) {
        $name = strtoupper($name);
    }
    echo "Todos los nombres se pasan a mayúsculas:\n";
    print_r($names);

    // Bucle "while"
    $n = 0;
    $n_f = 5;
    
    echo "Números del $n al $n_f: " . chr(10);
    while($n <= $n_f) {
        echo $n . chr(9);
        $n++; //$n = $n + 1;
    }

    // Otro ejemplo
    $year = 2020;
    $old_year = 2015;
    
    // Arreglo vacío
    $a_years = array();
    
    echo "\n\nArreglo con los años desde $old_year hasta el $year:\n";
    while($old_year <= $year) {
        $a_years[] = $old_year;
        $old_year++;
    }
    print_r($a_years);

?>