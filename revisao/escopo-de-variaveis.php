<?php
declare(strict_types=1);

$valor = 10;

function soma(float $num1, float $num2)
{
    return ($num1 + $num2) + $valor;//PHP Notice:  Undefined variable: valor
}

$valor2 = 12;

function soma2(float $num1, float $num2, &$minha_var_por_referencia = 0)
{
    $minha_var_por_referencia = $minha_var_por_referencia + ($num1 + $num2);
}

function dobro(float &$minha_var_por_referencia)
{
    $minha_var_por_referencia = $minha_var_por_referencia * 2;
}

soma2(4, 3, $valor2);

dobro($valor2);

echo $valor2;