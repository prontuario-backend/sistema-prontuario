<!DOCTYPE html>
<html lang="pt-br">
<?php 
include_once __DIR__ . '/includeInter.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balanço Hídrico</title>
    <link rel="stylesheet" href="./frontend/css/balancohidrico.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
            <p id="name">Dr. Paulo</p>
            <p id="profissao">Médico</p>
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
    <!-- FIM do HEADER -->
    <!-- INICIO do conteudo principal -->
    <div class="main">


        <!-- INICIO do NAVBAR -->
        <div class="navbar shadow">
            <h1 class="dados">DADOS</h1>
            <ul>
                <li class="itemList" id="navPaciente"><i class="icon fa-solid fa-user"></i><span
                        class="spanNone">Pacientes</span></li>
                <li class="itemList" id="navAgenda"><i class="icon fa-solid fa-notes-medical"></i><span
                        class="spanNone">Anamnese</span></li>
                <li class="itemList" id="navServicos"><i class="icon fa-solid fa-clipboard"></i><span
                        class="spanNone">Anotações</span></li>
                <li class="itemList" id="navFinanceiro"><i class="icon fa-solid fa-droplet"></i><span
                        class="spanNone">Balanço Hídrico</span></li>
            </ul>

            <div class="buttonPosition">
                <button type="button" class="btn">BUSCAR</button>
            </div>

        </div>
        <!-- FIM do NAVBAR -->

        <!-- INICIO do CONTEUDO -->
        <div class="conteudo shadow">


            <!-- O Modal -->
            <div id="myModal" class="modal">

                <!-- Conteúdo do Modal -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Formulário</h2>
                    <form id="myForm" method="post" action="./interBalHidrico.class.php">
                        <label for="data">Data:</label>
                        <input type="date" id="data" name="data" required><br><br>
                        <label for="hora">Hora:</label>
                        <input type="datetime" id="hora" name="hora" required><br><br>
                        <label for="tipo">Tipo:</label>
                        <input type="text" id="tipo" name="tipo" required><br><br>
                        <label for="liquidos">Líquidos Eliminados</label>
                        <input type="submit" value="Enviar">
                    </form>
                </div>

            </div>
            <div class="tabela">
                <table id="minhaTabela">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Hora</th>
                            <th>Tipo</th>
                            <th>Líquidos Eliminados</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>João</td>
                            <td>Silva</td>
                            <td>30</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Maria</td>
                            <td>Santos</td>
                            <td>25</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Pedro</td>
                            <td>Almeida</td>
                            <td>35</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button id="openModalBtn" class="btn-dado">Adicionar Dados</button>
        </div>
        <!-- FIM do CONTEUDO -->
    </div>
    <!-- FIM do conteudo principal -->
    <script src="../js/modal.js"></script>
</body>

</html>