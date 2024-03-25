<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'cadastro.php';

// Verifica se a sessão 'user' está definida e não está vazia
if (isset ($_SESSION['user']) && !empty ($_SESSION['user'])) {
    $cargo = $_SESSION['user'][0];
    $nome = $_SESSION['user'][1];
} else {
    // Redireciona para a página de login se a sessão 'user' não estiver definida
    // echo "<meta http-equiv='refresh' content='0; url=https://prontuario-backend.000webhostapp.com/frontend/'>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buscar</title>
    <link rel="stylesheet" href="../css/buscar.css" />
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>
    <!-- INICIO do HEADER -->
    <div class="header shadow">
        <div class="logo">
            <i class="fa-solid fa-notes-medical"></i>
            <p>UNI-TI</p>
        </div>
        <div class="login">
            <i class="fa-solid fa-user-doctor"></i>
            <p id="name">
                <?php echo $nome; ?>
            </p>
            <p id="profissao">
                <?php echo $cargo; ?>
            </p>
            <a href="/frontend/index.html"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
        </div>
    </div>
    <!-- FIM do HEADER -->
    <!-- INICIO do conteudo principal -->
    <div class="titulo">
        <h1>SEU SISTEMA ONLINE</h1>
    </div>

    <div class="main">
        <div class="conteudo">
            <div class="pesquisa">
                <div class="caixa">
                    <div class="inputposition">
                        <input class="input" type="text" placeholder="Pesquise o paciente pelo nome ou CPF">
                        <div onclick="a()" class="buttonbuscar">
                            BUSCAR
                        </div>
                    </div>
                </div>
            </div>

            <div class="positionbutton">
                <a href="/frontend/paginas/cadastrarPaciente.html"><button type="button" class="btn">CADASTRAR
                        PACIENTE</button></a>
            </div>

        </div>
    </div>
    <!-- FIM do conteudo principal -->

    <div class="titulo">
        <h1> PACIENTE </h1>
    </div>

    <!-- INICIO conteudo secundario -->
    <div class="conteudo2position">
        <div class="conteudo2">
            <div class="nome">
                Nome: Fulano da Silva Junior
            </div>
            <div class="cpf">
                CPF: 179.982.092.74
            </div>
            <div class="data">
                Data de Nascimento: 01/01/2000
            </div>

            <div class="buttonseguir">
                <div class="botao">
                    <a href="/frontend/paginas/pacientes.html"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>