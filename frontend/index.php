<!DOCTYPE html>
<html lang="pt-br">
<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'backend' . DIRECTORY_SEPARATOR . 'inter' . DIRECTORY_SEPARATOR . 'includeInter.php';
$erros = [];
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/index.css">
  <title>UNI-TI</title>
</head>

<body>
  <?php
  if (isset ($_POST['coren']) && isset ($_POST['senha'])) {
    $corenOuCrm = $_POST['coren'];
    $senha = $_POST['senha'];
    login($corenOuCrm, $senha);
  }
  ?>
  <div class="header shadow">
    <h1>UNI-TI</h1>
  </div>
  <div class="main">

    <div class="container-avatar">
      <img src="imagens/enfermeiro-prontuario.png" alt="brinca n">
    </div>

    <div class="container-login">
      <div class="container-login-item">

        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="form-group">
            <label for="coren-crm">Coren/CRM:</label>
            <input type="text" id="coren-crm" name="coren" value='CORENMG00000ENF'>
          </div>
          <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha">
          </div>
          <div class="buttonPosition">
            <div class="btn-buscar">
              <!--consertar a cor do botao abaixo-->
              <button type='submit' id='btn'>ENTRAR</button>
            </div>
          </div>
          <p>Crie seu cadastro <a href="./paginas/login.php">aqui</a></p>
        </form>

      </div>
    </div>
  </div>
  <?php
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
      $logado = $inter->fazerLogin($coren->getCoren(), $senha);
      if ($logado !== false) {
        $_SESSION['cargo'] = 'ENF';//salva o tipo de cargo
        $_SESSION['enfNome'] = $logado['nome'];//salva o nome do enfermeiro
        redirect();//redireciona para a pagina de buscar pasciente
      }

    }
    if (strlen($corenOuCrm) > 0 && strlen($corenOuCrm) < 6) {
      //00000MG <- exemplo crm
      $crm = new Crm($corenOuCrm);
      $inter = new InterMed();
      $logado = $inter->fazerLogin($crm->getCrm(), $senha);
      if ($logado !== false) {
        $_SESSION['cargo'] = 'MED';//salva o tipo de cargo
        $_SESSION['medNome'] = $logado['nome'];//salva o nome do medico
        redirect();//redireciona para a pagina de buscar pasciente
      }
    }
  }
  ?>

  <?php
  function validarEstado(string $estado)
  {
    if (strlen($estado) > 2 || strlen($estado) < 2) {//verifica a quantidade de caracteres do parametro passado.
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
    header("location: http://localhost/php-poo/Nova%20pasta/sistema-prontuario/frontend/paginas/buscar.html");
    exit();
  }
  ?>
</body>

</html>