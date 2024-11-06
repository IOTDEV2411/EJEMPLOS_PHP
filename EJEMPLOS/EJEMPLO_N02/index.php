<?php
// Definir una función que recorre e imprime los elementos de un array
function imprimirElementos($array) {
    foreach ($array as $elemento) {
        echo $elemento . "<br>"; // Imprime cada elemento con una nueva línea en HTML
    }
}

// Crear un array
// $frutas = array("Manzana", "Banana", "Naranja", "Uva");

$paises = array("Peru", "Venezuela", "Colombia", "Brasil","Argentina","Ecuador");

imprimirElementos($paises)
?>