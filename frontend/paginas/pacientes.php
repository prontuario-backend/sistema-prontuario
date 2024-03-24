<!DOCTYPE html>
<html lang="pt-br">
<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'backend' . DIRECTORY_SEPARATOR . 'inter' . DIRECTORY_SEPARATOR . 'includeInter.php';
?>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Paciente</title>
   <link rel="stylesheet" href="../css/pacientes.css">
   <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

   <style>
      .container {
         opacity: 1;
         transition: opacity 0.5s ease-in-out;
      }

      .container.fade-out {
         opacity: 0;
      }

      /* Remover sublinhado e cor dos links */
      .navbar ul {
         list-style: none;
         padding: 0;
         margin: 0;
      }

      .navbar ul li a {
         text-decoration: none;
         color: inherit;
         /* herda a cor do pai, você pode definir uma cor específica se desejar */
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
         <a href="/index.html"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
      </div>
   </div>
   <!-- FIM do HEADER -->
   <!-- INICIO do conteudo principal -->
   <div class="main">


      <!-- INICIO do NAVBAR -->
      <div class="navbar shadow">
         <h1 class="dados">DADOS</h1>
         <ul>
            <li class="itemList" id="navPaciente"><a href="./pacientes.html"><i class="icon fa-solid fa-user"></i><span
                     class="spanNone">Pacientes</span></a></li>
            <li class="itemList" id="navAgenda"><a href="./anamnese.html"><i
                     class="icon fa-solid fa-notes-medical"></i><span class="spanNone">Anamnese</span></a></li>
            <li class="itemList" id="navServicos"><a href="./anotacoes.html"><i
                     class="icon fa-solid fa-clipboard"></i><span class="spanNone">Anotações</span></a></li>
            <li class="itemList" id="navFinanceiro"><a href="./balancohidrico.html"><i
                     class="icon fa-solid fa-droplet"></i><span class="spanNone">Balanço Hídrico</span></a></li>
         </ul>

         <div class="buttonPosition">
            <div class="btn-buscar"><a href="./buscar.html">BUSCAR</a></div>
         </div>

      </div>
      <!-- FIM do NAVBAR -->

      <!-- INICIO do CONTEUDO -->
      <div class="conteudo shadow">

         <div class="titulo">
            <h1>DADOS PACIENTE</h1>
         </div>
         <div class="container-cadastro">
            <div class="row">
               <div class="container-item">
                  <label for="nome">Nome</label>
                  <span id="p-nome">Fernando Martins de Oliveira</span>
                  <button onclick="editarCampo('p-nome')"><i class="fa-regular fa-pen-to-square"></i></button>
               </div>
               <div class="container-item">
                  <label for="cpf">CPF</label>
                  <span id="p-cpf">___.___.-__</span>
                  <button onclick="editarCampo('p-cpf')"><i class="fa-regular fa-pen-to-square"></i></button>
               </div>
               <div class="container-item">
                  <label for="sexo">Sexo</label>
                  <span id="p-sexo">Masculino</span>
                  <button onclick="editarCampo('p-sexo')"><i class="fa-regular fa-pen-to-square"></i></button>
               </div>
            </div>
            <div class="row">
               <div class="container-item">
                  <label for="nasc">Data de nascimento</label>
                  <span id="p-nasc">01/10/2002</span>
                  <button onclick="editarCampo('p-nasc')"><i class="fa-regular fa-pen-to-square"></i></button>
               </div>
               <div class="container-item">
                  <label for="idade">Idade</label>
                  <span id="p-idade">21</span>
                  <button onclick="editarCampo('p-idade')"><i class="fa-regular fa-pen-to-square"></i></button>
               </div>
               <div class="container-item">
                  <label for="raca">Raça</label>
                  <span id="p-raca">Pardo Escuro</span>
                  <button onclick="editarCampo('p-raca')"><i class="fa-regular fa-pen-to-square"></i></button>
               </div>
            </div>
            <div class="row">
               <div class="container-item">
                  <label for="email">E-mail</label>
                  <span id="p-email">prontuariobhdev@gmail.com</span>
                  <button onclick="editarCampo('p-email')"><i class="fa-regular fa-pen-to-square"></i></button>
               </div>
               <div class="container-item">
                  <label for="peso">Peso</label>
                  <span id="p-peso">68kg</span>
                  <button onclick="editarCampo('p-peso')"><i class="fa-regular fa-pen-to-square"></i></button>
               </div>
               <div class="container-item">
                  <label for="altura">Altura</label>
                  <span id="p-altura">1.75cm</span>
                  <button onclick="editarCampo('p-altura')"><i class="fa-regular fa-pen-to-square"></i></button>
               </div>
            </div>
            <div class="row">
               <div class="container-item">
                  <label for="mae">Mãe</label>
                  <span id="p-mae">Maria</span>
                  <button onclick="editarCampo('p-mae')"><i class="fa-regular fa-pen-to-square"></i></button>
               </div>
               <div class="container-item">
                  <label for="pai">Pai</label>
                  <span id="p-pai">Jonas</span>
                  <button onclick="editarCampo('p-pai')"><i class="fa-regular fa-pen-to-square"></i></button>
               </div>
               <div class="container-item">
                  <label for="cep">CEP</label>
                  <span id="p-cep">3300-086</span>
                  <button onclick="editarCampo('p-cep')"><i class="fa-regular fa-pen-to-square"></i></button>
               </div>
            </div>
            <div class="row">
               <div class="container-item">
                  <label for="endereco">Endereço</label>
                  <span id="p-endereco">R. Dois, Três</span>
                  <button onclick="editarCampo('p-endereco')"><i class="fa-regular fa-pen-to-square"></i></button>
               </div>
               <div class="container-item">
                  <label for="telefoneR">Telefone Residencial</label>
                  <span id="p-teleR">31-3340-0998</span>
                  <button onclick="editarCampo('p-teleR')"><i class="fa-regular fa-pen-to-square"></i></button>
               </div>
               <div class="container-item">
                  <label for="telefoneC">Telefone Celular</label>
                  <span id="p-teleC">4002-8922</span>
                  <button onclick="editarCampo('p-teleC')"><i class="fa-regular fa-pen-to-square"></i></button>
               </div>
            </div>

         </div>
         <div id="myModal" class="modal" data-span-id=""> <!-- Aqui é onde vamos definir o data-span-id -->
            <div class="modal-content">
               <span class="close">&times;</span>
               <input type="text" id="editInput">
               <button onclick="salvarEdicao()">Salvar</button>
            </div>
         </div>


      </div>
   </div>
   <!-- FIM do CONTEUDO -->
   </div>
   <script src="../js/editarpacientes.js"></script>
</body>

</html>