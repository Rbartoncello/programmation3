<?php
$num = 43;

$unidades = array('uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve');
$decenas = array('Veinte', 'Treinta', 'Cuarenta', 'Cincuenta', 'Sesenta');

if($num % 10 == 0) {
    $indice = $num / 10;
    echo $decenas[$indice - 2];
} else {
    $indice_decena = intdiv($num, 10);
    $indice_unidad = $num % 10;

    echo $decenas[$indice_decena - 2] . ' y ' . $unidades[$indice_unidad - 1];
}


/*
    Aplicación No 5
    Bartoncello Ricardo
*/