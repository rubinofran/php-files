<?php // Pruebas 3

    // En programación, un helper es una función o conjunto de funciones genéricas, de uso común, 
    // destinadas a servir de ayuda a otros procesos dentro de un mismo sistema.
    
    // Helper que retorna la fecha actual:
    function get_current_date($format) {
        
        $date_format = array(
            "largo" => "l, F j, Y",
            "corto" => "d/m/Y",
            "ISO" => "Y-m-d",
        );
        $date = NULL;
        if(array_key_exists($format, $date_format)) {
            $date = date($date_format[$format]); // date() recibe los formatos "l, F j, Y" - "d/m/Y" - "Y-m-d"
        }
        return $date;

    }

    // Formatos para expresar fechas
    $date = get_current_date("largo");
    echo $date . chr(10);
    $date = get_current_date("corto");
    echo $date . chr(10);
    $date = get_current_date("ISO");
    echo $date;
    // No responde a formatos inexistentes de modo que no imprime nada
    $date = get_current_date("formato que no existe");
    echo $date;

?>