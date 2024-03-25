<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'backend' . DIRECTORY_SEPARATOR . 'inter' . DIRECTORY_SEPARATOR . 'includeInter.php';


if (isset ($_POST['nome']) && isset ($_POST['coren']) && isset ($_POST['senha'])) {
    $nome = $_POST['nome'];
    $corenOuCrm = $_POST['coren'];
    $senha = $_POST['senha'];
    cadastro($nome, $corenOuCrm, $senha);
}
function cadastro(string $nome, string $corenOuCrm, string $senha)
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
        $enf = new Enfermeiro($coren->getCoren(), $nome, $senha);
        $logado = $inter->create($enf);
        if ($logado !== false) {
            $_SESSION['cargo'] = 'ENF';//salva o tipo de cargo
            $_SESSION['enfNome'] = $nome;//salva o nome do enfermeiro
            $inter->fecharConexao();
            redirect();//redireciona para a pagina de buscar pasciente
        }

    }
    if (strlen($corenOuCrm) > 0 && strlen($corenOuCrm) < 6) {
        //00000MG <- exemplo crm
        $crm = new Crm($corenOuCrm);
        $inter = new InterMed();
        $logado = $inter->fazerLogin($crm->getCrm(), $senha);
        $medico = new Medico($nome, $crm->getCrm(), $senha);
        $logado = $inter->create($medico);
        if ($logado !== false) {
            $_SESSION['cargo'] = 'MED';//salva o tipo de cargo
            $_SESSION['medNome'] = $nome;//salva o nome do enfermeiro
            $inter->fecharConexao();
            redirect();//redireciona para a pagina de buscar pasciente
        }
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

function redirect()//redireciona para a pagina de cadastrar pascientes
{
    echo "<meta http-equiv='refresh' content='0; url=https://prontuario-backend.000webhostapp.com/frontend/paginas/buscar.html'>";
}
