<?php
session_start();
require_once __DIR__ . DIRECTORY_SEPARATOR . 'interFront.php';


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
            $inter->fecharConexao();
            redirect('ENF', $nome);//redireciona para a pagina de buscar pasciente
        }

    }
    echo (strlen($corenOuCrm) > 0 && strlen($corenOuCrm) <= 7 == false) . '<br>';
    if (strlen($corenOuCrm) > 0 && strlen($corenOuCrm) <= 7) {
        //00000MG <- exemplo crm
        $crm = new Crm($corenOuCrm);
        $inter = new InterMed();
        $logado = $inter->read($crm->getCrm());
        $medico = new Medico($nome, $crm->getCrm(), $senha);
        $logado = $inter->create($medico);
        if ($logado !== false) {
            $inter->fecharConexao();
            redirect('MED', $nome);//redireciona para a pagina de buscar pasciente
        }
    }
}