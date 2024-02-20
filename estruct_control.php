<?php // Estructura de contról, condicional múltiple switch
   
   // Función date, Lunes es 1 y domingo es 7
    $day_number = date('N');

    echo "Día " . $day_number . " de la semana\n"; 

    $day_info = '';

    // Evaluando casos posibles
    switch($day_number){
        
        case 6:
            $day_info = "Hoy es Sábado.\n";
            break;
        
        case 7:
            $day_info = "Hoy es Domingo.\n";
            break;

        default:
            $day_info = "Hoy no es un día del fin de semana.\n";
    }
    echo $day_info;

    // Evaluando casos posibles de otra forma
    switch($day_number){
        
        case 6:
        case 7:
            $day_info = "Hoy es un día del fin de semana.\n";
            break;
        
        default:
            $day_info = "Hoy no es un día del fin de semana.\n";
    }
    echo $day_info;
?>
