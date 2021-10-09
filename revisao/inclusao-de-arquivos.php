<?php

// echo __LINE__.' - '; include         'arquivo.php'; echo PHP_EOL;
// echo __LINE__.' - '; include         'arquivo.php'; echo PHP_EOL;
// echo __LINE__.' - '; include_once    'arquivo.php'; echo PHP_EOL;

// echo __LINE__.' - '; require         __DIR__.'/../04-funcoes/arquivo.php'; echo PHP_EOL;
// echo __LINE__.' - '; require_once    __DIR__.'/../04-funcoes/arquivo.php'; echo PHP_EOL;
// echo __LINE__.' - '; require         __DIR__.'/../04-funcoes/arquivo.php'; echo PHP_EOL;


// $path = __DIR__.'/../revisao/files/nova/../../../arquivo.php';
$path = __DIR__.'/../arquivo.php';
// echo $path;
include $path;
