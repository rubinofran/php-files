<?php // foreach
    
    $names = array(0 => 'Javier', 1 => 'Osvaldo', 2 => 'Vito',);

    // Bucle "foreach", con salto de línea entre cada nombre
    echo "Lista separada con saltos de línea:\n";
    foreach($names as $name) {
        echo $name . chr(10);
    }

    // Con espaciado entre cada nombre
    echo "\nLista separada por espacios:\n";
    foreach($names as $name) {
        echo $name . chr(9);
    }
    // NOTA: chr() devuelve el caracter especificado

    // VER foreach($array as $clave => $valor) !!!!!!!

    // Utilización de la clave
    $my_information = array(
        'name' => 'Francisco',
        'last name' => 'Rubino',
        'date' => '04-01-1993', 
        'married' => true
    );
    echo "\n";
    print_r($my_information);

    // Verificar si es un arreglo, el operador ternario ?: permite responder si en el caso de que la info se encuentre dentro de un array
    echo "\nLa información está contenida en un arreglo: " . (is_array($my_information) ? "si" : "no") . "\n";
    
    // Bucle con algo de complejidad
    echo "Info del arreglo con sus claves y valores:" . chr(10);
    foreach($my_information as $key => $value) {
        if(!is_array($value)) { 
            // Utilizando == en vez de ===, cambia el valor a 'SI' en todos los elementos
            if($value === true) { 
                $value = 'YES';
            } else if($value === false) {
                $value = 'NO';
            }
        }
        echo "$key: $value" . chr(10);
    }
    
    // Asignación por referencia para modificar el valor
    // NOTA: observar el signo & para modificar el valor
    echo "\nReemplazo true por YES, o false por NO:" . chr(10);
    foreach($my_information as $key => &$value){
        if(!is_array($value)){
            // Utilizando == en  vez de ===, cambia el valor a 'SI' en todos los items
            if($value === true){ 
                $value = 'YES';
            }else if($value === false){
                $value = 'NO';
            }
        }
    }
    print_r($my_information);
?>