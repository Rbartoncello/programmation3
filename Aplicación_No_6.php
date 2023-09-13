<?php
$array = array();

for ($i = 0; $i < 5; ++$i) {
    $array[$i] = rand(0, 10);
}

$suma = array_sum($array);
$promedio = $suma / count($array);

if ($promedio > 6)
    echo "El promedio es mayor que 6";
else if ($promedio < 6)
    echo "El promedio es menor que 6";
else
    echo "El promedio es 6";



/*
    Aplicación No 6
    Bartoncello Ricardo
*/