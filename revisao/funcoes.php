<?php
//Com funções
function aPagar($compra, $impostos = null)
{
    return ($impostos) ? $compra + ($compra / 100 * $impostos) : $compra;
}

$compra         = 100;
$impostos       = null;
$total_a_pagar  = aPagar($compra);
echo $total_a_pagar.PHP_EOL;

//----------------------------

//Sem funções
$_compra         = 110;
$_impostos       = 10;

$_total_a_pagar = ($_impostos) ? $_compra + ($_compra / 100 * $_impostos) : $_compra;

// echo $_total_a_pagar.PHP_EOL;