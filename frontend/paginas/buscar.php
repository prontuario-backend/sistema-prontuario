<?php
session_start();
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
                Seu nome
            </p>
            <p id="profissao">
                ENF
            </p>
            <a href="/frontend/index.html"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
        </div>
    </div>
    <!-- FIM do HEADER -->
    <!-- INICIO do conteudo principal -->
    <div class="titulo">
        <h1>SEU SISTEMA ONLINE</h1>
    </div>

    <form action="buscar2.php" method="post">
        <div class="main">
            <div class="conteudo">
                <div class="pesquisa">
                    <div class="caixa">
                        <div class="inputposition">
                            <input class="input" type="text" placeholder="Pesquise o paciente pelo nome ou CPF"
                                name="inputPasciente">
                            <div onclick="a()" class="buttonbuscar">
                                <button type="submit">BUSCAR</button>
                            </div>
                        </div>
                    </div>
                </div>

<<<<<<< Updated upstream
                <div class="positionbutton">
                    <a href="/frontend/paginas/cadastrarPasciente.html">
                        <button type="button" class="btn">CADASTRAR PACIENTE</button>
                    </a>
                </div>
=======
            <div class="positionbutton">
                <a href="frontend/paginas/cadastrarPasciente.html"><button type="button" class="btn">CADASTRAR
                        PACIENTE</button></a>
            </div>
>>>>>>> Stashed changes

            </div>
        </div>
    </form>
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