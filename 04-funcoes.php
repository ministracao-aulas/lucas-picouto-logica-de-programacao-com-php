<?php

function calculaConta($valor_da_conta, $couver = null)
{
    if(!$couver)
        return $valor_da_conta;
    else
        return $valor_da_conta + ($valor_da_conta / 100 * $couver);
}

$conta = 140;
$total_conta = calculaConta($conta, 10);
// echo "Valor da conta: ". $total_conta.PHP_EOL;


$conta = 180;
$total_conta = calculaConta($conta, 10);
// echo "Valor da conta: ". $total_conta.PHP_EOL;


$conta = 150;
$total_conta = calculaConta($conta, 15);
// echo "Valor da conta: ". $total_conta.PHP_EOL;


//-----------------------------

function dobro($numero)
{
    if(is_numeric($numero))
        return $numero * 2;

    return 0;
}

$num = 4;
$dobro = dobro($num);

$dobro = dobro($dobro);

$dobro = dobro($dobro);

$dobro = dobro($dobro);

$dobro = dobro('45');
// echo $dobro;


function meuIp()
{
    $meu_ip_json = file_get_contents('https://api.ipify.org?format=json');
    $meu_ip = json_decode($meu_ip_json, true)['ip'] ?? null;
    return $meu_ip ?? null;
}

echo "Meu IP público é ". meuIp();