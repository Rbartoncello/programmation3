<?php

include './Auto.php';

$auto1 = new Auto('Tesla', 'red');
$auto2 = new Auto('Tesla', 'blue');

$auto3 = new Auto('Tesla', 'red', 100);
$auto4 = new Auto('Tesla', 'red', 100);

$auto5 = new Auto('Tesla', 'blue', 100, new DateTime());


$auto3->AgregarImpuestos(1500);
$auto4->AgregarImpuestos(1500);
$auto5->AgregarImpuestos(1500);

$importeSumado = Auto::Add($auto1, $auto2);

print $importeSumado;

echo '<br/>';

print $auto2->Equals($auto5);

echo '<br/>';

Auto::MostrarAuto($auto1);
echo '<br/>';

Auto::MostrarAuto($auto3);
echo '<br/>';

Auto::MostrarAuto($auto5);

/*
    Aplicación No 17
    Bartoncello Ricardo
*/
