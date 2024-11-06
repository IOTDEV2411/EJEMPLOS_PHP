<?php
// Incluir el archivo con la función 'leer_imprimir'

$script_function = "funciones.php";
if(file_exists($script_function)){
    require($script_function);
    
    leer_imprimir('Ejemplo N04.txt');
    peso_archivo('Ejemplo N04.txt');
    leer_imprimir('Ejemplo N05.txt');
    peso_archivo('Ejemplo N05.txt');
}
else{
    echo "Error: No se encuentra el script '$script_function' dentro del proyecto...\n";
}

?>
