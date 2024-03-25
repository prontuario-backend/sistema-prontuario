<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'backend' . DIRECTORY_SEPARATOR . 'inter' . DIRECTORY_SEPARATOR . 'includeInter.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'paginas'
    . DIRECTORY_SEPARATOR . 'interFront.php';

if (isset ($_POST['coren']) && isset ($_POST['senha'])) {
    $corenOuCrm = $_POST['coren'];
    $senha = $_POST['senha'];
    login($corenOuCrm, $senha);//faz login
}

function login(string $corenOuCrm, string $senha)
{
    $corenOuCrm = strtoupper($corenOuCrm);
    $estado = $corenOuCrm[5] . $corenOuCrm[6];
    if (!validarEstado($estado)) {
        throw new Exception("erro, o estado $estado não existe.");
    }
    if (strpos($corenOuCrm, 'COREN') !== false) {
        //CORENMG00000ENF <- ezemplo coren  
        $coren = new Coren($corenOuCrm);
        $inter = new InterEnf();
        $logado = $inter->read($coren->getCoren(), $senha);
        $inter->fecharConexao();
        redirect1('ENF', $logado['nome']);//redireciona para a pagina de buscar pasciente


    }
    if (strlen($corenOuCrm) > 0 && strlen($corenOuCrm) <= 7) {
        //00000MG <- exemplo crm
        $crm = new Crm($corenOuCrm);
        $inter = new InterMed();
        $logado = $inter->read($crm->getCrm());
        $inter->fecharConexao();

        redirect1('MED', $logado['nome']);//redireciona para a pagina de buscar pasciente

    }
}



function validarEstado(string $estado)
{
    if (strlen($estado) > 2 || strlen($estado) < 2) {//verifica a quantidade de caracteres do parametro passado. throw new
        throw new Exception('Erro, a sigla do estado fornecido deve ter exatamente 2 caracteres. ');
    }
    if (ctype_alpha($estado) == false) {//verifica se tem números no parametro passado
        throw new Exception('Erro, o parametro estado não pode ser do tipo int.');
    }
    $estado = str_replace(' ', '', $estado);//remove os espaços em branco do parametro
    $estado = trim(strtoupper($estado));//remove os espaços em branco do parametro e o deixa maiusculo.

    //lista dos 26 estados brasileiros
    $listaEstados = [
        'AC',
        'AL',
        'AP',
        'AM',
        'BA',
        'CE',
        'ES',
        'GO',
        'MA',
        'MT',
        'MS',
        'MG',
        'PA',
        'PB',
        'PR',
        'PE',
        'PI',
        'RJ',
        'RN',
        'RS',
        'RO',
        'RR',
        'SC',
        'SP',
        'SE',
        'TO',
        'DF'
    ];
    foreach ($listaEstados as $i => $valor) {

        if ($estado === $valor) {//verifica se o estado fornecido esta na lista de estados
            return true;
        } else if ($i == count($listaEstados) - 1 && $estado != $valor) {
            throw new Exception('Erro, o estado fornecido não existe ou é invalido,');
        }
    }
}

function redirect1($cargo, $nome)//redireciona para a pagina de cadastrar pascientes
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