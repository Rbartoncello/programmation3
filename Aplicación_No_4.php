<?php
$op1 = 6;
$op2 = 0;
$operador = '/';

switch ($operador) {
    case '+':
        $result = $op1 + $op2;
        break;
    case '-':
        $result = $op1 - $op2;
        break;
    case '-':
        $result = $op1 * $op2;
        break;     
    default:
        if($op2 != 0)
            $result = $op1 / $op2;
        else
            $result = 0;
        break;     
}

echo $result;

/*
    Aplicación No 4
    Bartoncello Ricardo
*/