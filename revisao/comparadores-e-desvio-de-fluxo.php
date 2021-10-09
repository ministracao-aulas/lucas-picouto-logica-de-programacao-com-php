<?php
$dados = [
    'Algo 1',
    [],
    null,
    'Algo 4',
    [ '' ],
    'Algo 5',
    '',
    '',
    'Algo 8',
];

foreach($dados as $dado)
{

    if(!$dado || is_array($dado)) //Early return
    {
        continue;
    }

    if($dado == 'Algo 5')
    {
        break;
    }

    echo $dado.PHP_EOL;
}