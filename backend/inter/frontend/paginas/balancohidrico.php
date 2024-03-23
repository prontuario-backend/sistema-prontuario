<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balanço Hídrico</title>
    <link rel="stylesheet" href="./css/balancohidrico.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* CSS adicional para o popup */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 9999;
            width: 300px;
        }

        .popup input,
        .popup textarea,
        .popup button {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .popup button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .popup h3,
        .popup p {
            text-align: center;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
            display: none;
        }

        /* Estilo da tabela */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            cursor: pointer; /* Adicionando cursor pointer para indicar que o elemento é clicável */
        }
    </style>
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

            <table id="myTable" class="tabela">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Hora</th>
                        <th>Tipo</th>
                        <th>Líquidos Eliminados</th>
                        <th onclick="openPopup()">+</th> <!-- Adicionando o evento onclick para chamar a função openPopup() -->
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
            <script>
                // Captura a tabela e o corpo da tabela
                var table = document.getElementById("myTable");
                var tbody = table.getElementsByTagName("tbody")[0];

                // Função para adicionar uma nova linha à tabela com os dados inseridos
                function addRow(data, hora, tipo, liquidos) {
                    var newRow = tbody.insertRow();

                    var dataCell = newRow.insertCell(0);
                    var horaCell = newRow.insertCell(1);
                    var tipoCell = newRow.insertCell(2);
                    var liquidosCell = newRow.insertCell(3);

                    dataCell.innerHTML = data;
                    horaCell.innerHTML = hora
;
                    tipoCell.innerHTML = tipo;
                    liquidosCell.innerHTML = liquidos;
                }

                // Função para abrir o popup
                function openPopup() {
                    document.getElementById('popup').style.display = 'block';
                }

                // Função para fechar o popup
                function closePopup() {
                    document.getElementById('popup').style.display = 'none';
                }

                // Função para adicionar os dados inseridos na tabela ao clicar em "Salvar"
                function saveData() {
                    var data = document.getElementById('dataInput').value;
                    var hora = document.getElementById('horaInput').value;
                    var tipo = document.getElementById('tipoInput').value;
                    var liquidos = document.getElementById('liquidosInput').value;

                    addRow(data, hora, tipo, liquidos);
                    closePopup();
                }
            </script>
            <!-- FIM do CONTEUDO -->
        </div>
        <!-- FIM do conteudo principal -->

        <!-- Popup -->
        <div class="overlay" onclick="closePopup()"></div>
        <div class="popup" id="popup">
<form action="">
<input type="date" id="dataInput" name="data">
            <input type="time" id="horaInput" name="hora">
            <input type="text" id="tipoInput" placeholder="Tipo" name="tipo">
            <input type="text" id="liquidosInput" placeholder="Líquidos Eliminados" name="elim">
            <button onclick="saveData()" name="btn" type="submit">Salvar</button>
</form>
        </div>

    </body>

</html>