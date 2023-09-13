<?php

function InvertirPalabra1($array_palabras){
    $j = count($array_palabras) - 1;
    for ($i=0; $i<count($array_palabras); $i++){
        if ($i < count($array_palabras)/2) {
            $temp = $array_palabras[$i];
            $array_palabras[$i] = $array_palabras[$j];
            $array_palabras[$j] = $temp;
            $j--;
        }
    }
    return $array_palabras;
}

function InvertirPalabra2($array_palabras){
    return array_reverse($array_palabras);
}

function InvertirPalabra3($palabra){
    $array_palabra = str_split($palabra);
    $array_palabra = array_reverse($array_palabra);
    return implode('', $array_palabra);
}

$vec = array('h', 'o', 'l', 'a', 'l');

var_dump( InvertirPalabra1($vec));
echo '<br/>';
var_dump( InvertirPalabra2($vec));
echo '<br/>';
echo InvertirPalabra3('Hola');


/*
    Aplicación No 12
    Bartoncello Ricardo
*/
