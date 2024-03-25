<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'auxiliar' . DIRECTORY_SEPARATOR . 'includeAux.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'includeClasses.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'conexao.php';

require_once __DIR__ . DIRECTORY_SEPARATOR . 'interAnamnese.class.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'interAnotacaoEnf.class.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'interBalHidrico.class.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'interEnf.class.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'interMed.class.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'interPasc.class.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'interPront.class.php';

function request(string $url, array $dados)
{

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dados);

    // execute!
    $response = curl_exec($ch);

    // close the connection, release resources used
    curl_close($ch);

    // do anything you want with your response
    echo var_dump($response);
}