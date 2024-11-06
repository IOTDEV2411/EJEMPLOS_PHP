<?php
// Array de nombres
$nombres = ["Juan", "Ana", "Luis"];

// Definir la función de callback
function saludar($valor, $clave) {
    echo "Hola, $valor!<br>";
}

// Aplicar array_walk para ejecutar la función saludar en cada elemento del array
array_walk($nombres, "saludar");
?>
