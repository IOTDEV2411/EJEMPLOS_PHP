<?php
// Definir un array asociativo
$personas = ["Juan" => 28, "Pedro" => 35, "Ana" => 22, "María" => 30];

// Función que será llamada para cada elemento del array
function mostrarEdad($edad, $nombre) {
    echo "$nombre tiene $edad años.<br>";
}

// Aplicar array_walk al array 'personas'
array_walk($personas, "mostrarEdad");
?>
