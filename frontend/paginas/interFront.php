<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'backend' . DIRECTORY_SEPARATOR . 'inter' . DIRECTORY_SEPARATOR . 'includeInter.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'anamnese.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'anotacoes.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'balancohidrico.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'buscar.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'buscar2.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'cadastrarpasciente.php';

require_once __DIR__ . DIRECTORY_SEPARATOR . 'pacientes.php';

function redirect($cargo, $nome)//redireciona para a pagina de cadastrar pascientes
{
    // Inicia a sessão, se ainda não estiver iniciada
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['user'] = [$cargo, $nome];
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    echo "<meta http-equiv='refresh' content='0; url=https://prontuario-backend.000webhostapp.com/frontend/paginas/buscar.php'>";
}