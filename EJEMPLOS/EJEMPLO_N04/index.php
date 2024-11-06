<?php
// Abrir un archivo en modo lectura
$file = fopen("Ejemplo N04.txt", "r");

if ($file) {
    // Leer línea por línea hasta llegar al final del archivo
    while (!feof($file)) {
        $linea = fgets($file); // Leer una línea del archivo
        echo $linea . "<br>"; // Mostrar la línea leída
    }
    
    // Cerrar el archivo después de la lectura
    fclose($file);
} else {
    echo "Error al abrir el archivo.";
}
?>
