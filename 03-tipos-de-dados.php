<?php
declare(strict_types=1);
/*
    boolean
    integer
    array
    string
    null
    float
*/

$nome       = "Lucas"; //String
$idade      = 32; // int
$peso       = '78'; // String
$altura     = 1.74; // Float
$email      = 'lucasdiaspicouto26@hotmail.com';//String
$casado     = false; //bool
$cnh        = 'AB'; // String
$passaporte = null; // null
$filhos     = []; // Array
$bens       = [ // Array
    'carro',
    'moto',
    'casa',
];

$multi = [
    'casa',
    false,
    true,
    null,
    '',
    "",
    [],
    15.58,
    178,
    '78',
];
// var_dump($multi);

#-------------------------------------------------------------

//Alterando tipo com cast
function eMaiorDeIdade(int $idade)
{
    return $idade >= 18;
}

// $idade = (int) "28";//Agora é um integer
// $de_maior = eMaiorDeIdade($idade);
// var_dump($idade);

// $filhos = [ 'maria', 'pedro' ];
// $filhos = [];
// $tem_filhos = count($filhos) > 0;//Forma 1
// $tem_filhos = (bool) $filhos;//Forma 2 //Bool forma 1
// $tem_filhos = !! $filhos;//Forma 2 //Bool forma 2
// var_dump($tem_filhos);


// $email = "fulano@site.com";
// $tem_email = (bool) $email;
// var_dump($tem_email);
