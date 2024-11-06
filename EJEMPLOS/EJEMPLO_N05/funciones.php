<?php

function leer_imprimir($file_name){
    // Abrir un archivo en modo lectura
    $file = fopen($file_name, "r");

    if ($file) {
        // Leer línea por línea hasta llegar al final del archivo
        while (!feof($file)) {
            $linea = fgets($file); // Leer una línea del archivo
            echo $linea . "<br>"; // Mostrar la línea leída
        }
        echo "<br>";
        // Cerrar el archivo después de la lectura
        fclose($file);
    } else {
        echo "Error al abrir el archivo.";
    } 
}
function peso_archivo($file_name){
    $size = filesize($file_name);
    echo "El tamaño del archivo '$file_name' es '$size' Bytes <br>";
    echo "<br>";
}

?>