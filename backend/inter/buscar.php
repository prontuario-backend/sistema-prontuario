<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Index</title>
        <link rel="stylesheet" href="./frontend/css/buscar.css">        <link
            rel="shortcut icon"
            href="imagens/favicon.ico"
            type="image/x-icon"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        />
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
        <div class="titulo">
        <h1>SEU SISTEMA ONLINE</h1>
        </div>
        
        <div class="main">
            <div class="conteudo">
               <div class="pesquisa">
                 <div class="caixa">
                   <div class="inputposition">
                        <input class="input" type="text" placeholder="Pesquise o paciente pelo nome ou CPF" >
                        <div onclick="a()" class="buttonbuscar">
                            BUSCA
                        </div>
                   </div>
                </div>
               </div>
               <div id="myModal" class="modal">
               <div class="modal-content">
                   <span class="close">&times;</span>

                     <div class="positionbutton"> 
                        <button type="submit" class="buttoncadastro" method="post" action="./imterPasc.class.php">
                          CADASTRE UM PACIENTE
                      </button>
                   </div>
               </div>
            </div>
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
                Nome: Neemias Quemuel Brandão Nascimeto
            </div>
            <div class="cpf">
                CPF: 179.982.092.74
            </div>
            <div class="data">
                Data de Nascimento: 01/04/2000
            </div>

            <div class="buttonseguir">
                <div class="botao">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

        </div>
    </div>

    <!-- FIM conteudo secundario -->

    </body>
</html>