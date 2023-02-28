<?php

function compararDesafios($a, $b)
{
    // Se declaran las variables con valor 0 para el conteo de puntos de cada persona
    $puntosAlice = 0;
    $puntosBob = 0;

    // Tenemos 3 categorías las cuales vamos a iterar
    for ($i = 0; $i < 3; $i++) {
        // Si Alice tiene mas puntos en cada categoria le vamos a sumar un punto
        if ($a[$i] > $b[$i]) {
            $puntosAlice++;
        }
        // Si Bob tiene mas puntos en cada categoria le vamos a sumar un punto
        else if ($a[$i] < $b[$i]) {
            $puntosBob++;
        }
        // Si ambos obtienen la misma cantidad de puntos, no se suma nada a ningún puntaje final
    }

    // Devolvemos un arreglo con los puntos de Alice primero y los de Bob segundo
    // Vamos a devolver un arreglo con el total de puntos de cada 1, primero el de Alices y despues el de Bob
    return array($puntosAlice, $puntosBob);
}

// Declaramos la variable $a para alice donde en un arreglo vamos a definir los puntos por cada categoria
$a = array(17, 28, 30);

// Declaramos la variable $a para Bob donde en un arreglo vamos a definir los puntos por cada categoria
$b = array(999, 16, 8);

// Declaramos la variable puntos en donde asignamos y retornamos el valor de la funcion comprarDesafios
$puntos = compararDesafios($a, $b);

// Mostramos primeramente el valor de Alice en el indice 0
echo "Alice: " . $puntos[0] . " puntos\n";

// Damos un salto de linea para que no se vean juntos
echo "<br>";

// Mostramos primeramente el valor de Bob en el indice 1
echo "Bob: " . $puntos[1] . " puntos\n";