<?php
$numeros = array();

for ($i = 1; $i < 20; $i = $i+2) {
    $numeros[] = $i;
}

echo "Usando for:<br/>";
for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i] . "<br/>";
}

echo "<br/>Usando while:<br/>";
$indice = 0;
while ($indice < count($numeros)) {
    echo $numeros[$indice] . "<br/>";
    $indice++;
}

echo "<br/>Usando foreach:<br/>";
foreach ($numeros as $numero) {
    echo $numero . "<br/>";
}
?>







/*
    Aplicación No 7
    Bartoncello Ricardo
*/