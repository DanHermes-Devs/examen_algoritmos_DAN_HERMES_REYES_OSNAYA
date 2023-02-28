<?php
header('Content-Type: text/php; charset=utf-8');

// Creamos la funcion contarPalabras
function contarPalabras($texto) {

    // Convertimos la cadena de texto en minusculas
    $cadenaTexto = preg_split("/[\s,.;:!?—]+/", strtolower($texto));

    // Creamos un arreglo vacio
    $palabras = array();

    // Recorremos la cadena de texto
    foreach ($cadenaTexto as $word) {
        // Si la palabra ya exisste en el arreglo, con array_key_exists validamos esto y le incrementamos uno
        if (array_key_exists($word, $palabras)) {
            $palabras[$word] += 1;
        } else {
            // Agregar la palabra al arreglo con conteo inicial de 1
            $palabras[$word] = 1;
        }
    }

    // Mostramos el resultado dandonle un estilo de manera que se vea mas entendible
    return json_encode($palabras, JSON_PRETTY_PRINT);
}

// Ponemos el texto al cual se requiere sacar la frecuencia de cuantas palabras hay de cada una
$text = "Erase una vez una niñita que lucía una hermosa capa de color rojo. Como la niña la usaba muy a menudo, todos la llamaban Caperucita Roja. Un día, la mamá de Caperucita Roja la llamó y le dijo: —Abuelita no se siente muy bien, he horneado unas galletitas y quiero que tú se las lleves. —Claro que sí —respondió Caperucita Roja, poniéndose su capa y llenando su canasta de galletas recién horneadas. Antes de salir, su mamá le dijo: — Escúchame muy bien, quédate en el camino y nunca hables con extraños. —Yo sé mamá —respondió Caperucita Roja y salió inmediatamente hacia la casa de la abuelita.";

// Creamos la variable en donde mandaremos tambien la cadena de texto y asi misma obtendra el resultado con el return.
$result = contarPalabras($text);

// Mostramos el resultado
echo $result;

?>