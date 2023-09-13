<?php

include './Auto.php';
include './Garage.php';

$auto1 = new Auto('Tesla_1', 'red');
$auto2 = new Auto('Tesla_2', 'blue');

$auto3 = new Auto('Tesla_3', 'red', 100);
$auto4 = new Auto('Tesla_4', 'red', 100);

$auto5 = new Auto('Tesla_5', 'blue', 100, new DateTime());

$garage = new Garage('hOLA', 430.0);

$garage->Add($auto1);
$garage->Add($auto2);
$garage->Add($auto3);
$garage->Add($auto4);

$garage->MostrarGarage();

$garage->Remove($auto1);
$garage->Remove($auto4);

$garage->MostrarGarage();

$garage->Add($auto1);
$garage->Add($auto1);
$garage->MostrarGarage();



/*
    Aplicación No 18
    Bartoncello Ricardo
*/
