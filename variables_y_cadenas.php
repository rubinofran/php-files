<?php // Variables y cadenas

    $num_var = 12;
    $str_var = "doce";

    // Copiando variable
    $var_copy = $str_var;

    // Imprimiendo variables 
    echo "Número: $num_var\n";
    echo "Cadena: $str_var\n";

    // Concatenando variables
    $str_var_2 = $str_var . "na\n";
    echo "Nueva cadena: " . $str_var_2;

    // Información sobre el tipo de una variable;
    $tipo_num_var = gettype($num_var);
    echo "Tipo de la variable $num_var: " . $tipo_num_var . "\n";

    // Información sobre el tipo y valor de la variable
    echo "Tipo y valor de la variable $str_var: ";
    var_dump($str_var);

    // La función isset retorna true si la variable está definida y no es NULL
    if(isset($str_var)) {
        echo "1) $str_var es el valor de una variable definida no nula\n";
    };
    
    $str_var = NULL;
    if(!isset($str_var)) {
        echo "2) Variable nula\n";
    }
    
    if(!isset($indef_str_var)) {
        echo "3) Variable no definida\n";
    }
?>