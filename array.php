<?php // array(clave_1 => valor_1, clave_2 => valor_2);

// Entero como clave
$names = array(0 => 'Javier', 1 => 'Osvaldo', 2 => 'Vito',);

// Cadena como clave
$number_of_letters = array('Javier' => '6', 'Osvaldo' => '7', 'Vito' => '4',);

// Ver el arreglo
print_r($names);
print_r($number_of_letters);

// Los valores pueden ser de cualquier tipo
$my_information = array(
    'name' => 'Francisco',
    'last name' => 'Rubino',
    'date' => '04-01-1993', 
    'phone numbers' => array('mobile phone' => '011-XXXXXXXX', 'home' => '02352-XXXXXX',),
    'married' => false,
);
print_r($my_information);

// Si no se especifican las claves, se toman como enteros
$my_info2 = array(
    'Francisco',
    'Rubino',
    '04-01-1993',
);
print_r($my_info2);

// Acceso a elementos del array
echo $my_information['name'];
echo "\n";
echo $my_information['last name'];
echo "\n";
echo $my_info2[0];
echo "\n";
echo $my_info2[1];

// Modificando un valor del array
$a_modificable = array('a', 'b', 'c');
echo "\nOriginal:\n";
print_r($a_modificable);
$a_modificable[1] = 'x';
echo "\nModificado:\n";
print_r($a_modificable);

// Agregar elementos al array
echo "\nNuevo elemento sin índice especificado:\n";
$a_modificable[] = 'y';
print_r($a_modificable);

echo "\nNuevo elemento con índice especificado:\n";
$a_modificable['index'] = 'z'; 
print_r($a_modificable);

// Quitar elemento al array
unset($a_modificable['index']);
print_r($a_modificable);

?>