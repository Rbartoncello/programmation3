<?php

function ValidarPalabra($palabra, $max){
    $opciones = array('Recuperatorio', 'Parcial', 'Programacion');
    return in_array($palabra, $opciones) && strlen($palabra) < $max;
}

print '[+] '. ValidarPalabra('Programacion', 5);


/*
    Aplicación No 13
    Bartoncello Ricardo
*/
