<?php

function quantasLetras($texto)
{
    echo "Esse texto contem ". strlen($texto) . " letras".PHP_EOL;
}

function some($num1, $num2 = 0)
{
    echo "Total: " . ($num1 + $num2) .PHP_EOL;
}

function divida($num1, $num2)
{
    echo "Total: ". ($num1 / $num2) .PHP_EOL;
}

function letrasMaiusculas($texto, bool $retorne = false)
{
    $valor = strtoupper($texto);

    if($retorne)
        return $valor;
    else
        echo $valor.PHP_EOL;
}

function unaIsso(...$texto)
{
    echo (implode('', $texto)).PHP_EOL;
}
