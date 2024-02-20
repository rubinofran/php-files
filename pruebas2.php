<?php // Pruebas 2
    
    // Comentario de una sola línea
    # Comentario de una sola línea
    /* 
    Comentario 
    de 
    varias 
    líneas 
    */

    // Curiosidad
    /* Sobre <?=$foo; ?> como abreviación de <?php echo $foo; ?> */

    // Inclusión de archivos en PHP
    /* Funciones: include / include_once / require / require_once */
    
    // Incluyendo archivos locales
    /* 
    include("file.txt"); En caso de error el script continúa
    include_once("file.txt");
    require("file.html"); En caso de error el script finaliza
    require_once("file.html");
    En ambos casos, _once indica que el archivo no volverá a importarse
    */

    // Incluyendo archivos remotos
    /* include("http://www.myweb.com/file.php"); */

?>