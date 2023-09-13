<?php
$lapicera = array(
    'color' => '',
    'marca' => '',
    'trazo' => '',
    'precio' => 0.0
);

$lapiceras = array();

$lapicera['color'] = 'Azul';
$lapicera['marca'] = 'BIC';
$lapicera['trazo'] = 'Fino';
$lapicera['precio'] = 1.5;

$lapiceras[] = $lapicera;

$lapicera['color'] = 'Rojo';
$lapicera['marca'] = 'Pilot';
$lapicera['trazo'] = 'Medio';
$lapicera['precio'] = 2.0;

$lapiceras[] = $lapicera;


$lapicera['color'] = 'Verde';
$lapicera['marca'] = 'Faber-Castell';
$lapicera['trazo'] = 'Grueso';
$lapicera['precio'] = 2.5;

$lapiceras[] = $lapicera;

foreach($lapiceras as $lapicera){
    var_dump($lapicera);
    echo "<br/>";
}


?>

/*
    Aplicación No 10
    Bartoncello Ricardo
*/
