<?php
const ALGO = 'Valor';

echo ALGO;

define('ALGO2', 'Valor de ALGO2');

echo ALGO2;

define('PESSOA', ['nome' => 'Pedro']);

echo PESSOA['nome'];

define('config', [
    'app_name' => 'Formulario de contato',
]);

echo config['app_name'];