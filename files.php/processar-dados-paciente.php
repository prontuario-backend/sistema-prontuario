<?php
include './database/conecao.class.php';

$conexao = new Conexao();
$conexao->getConn();

// PEGANDO OS DADOS DO FORMULÁRIO AO CADASTRAR PACIENTE
     $nome = $_POST['nome'];
     $cpf = $_POST['cpf'];
     $telefone = $_POST['telefone'];
     $dataNasc = $_POST['dataNasc'];
     $endereco = $_POST['endereco'];
     $cep = $_POST['cep'];
     $corRaca = $_POST['corRaca'];
     $genero = $_POST['genero'];
     $mae = $_POST['mae'];
     $pai = $_POST['pai'];
     $altura = $_POST['altura'];
     $peso = $_POST['peso'];
     $data_atual = date('d/m/Y');
     $hora_atual = date('H:i');

     $smtp = $conn->prepare("INSERT INTO mensagens (nome, cpf, telefone, dataNasc,
     genero, endereco, cep, corRaca, mae, pai, altura, peso, data, hora) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
     $smtp ->bind_param("ssssssssssssss", $nome, $cpf, $telefone, $dataNasc,
     $genero, $endereco, $cep, $corRaca, $mae, $pai, $altura, $peso, $data_atual, $hora_atual);

     if($smtp->execute()){
        echo "Paciente cadastrado com sucesso!";
     }else{
        echo "Paciente não cadastrado!" .$smtp->error;
     }
     $smtp->close();
     $conn->close();
?>

