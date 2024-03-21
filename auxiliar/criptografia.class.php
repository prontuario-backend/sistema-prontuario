<?php
include_once __DIR__ . '/includeAux.php';
/*
Esta classe e responsavel por criptografar e descriptografar dados no geral, ela e capaz
de criptografar e descriptografar strings, senhas(so criptografa e compara) e arrays.

*/

class Criptografia
{
   private Validacao $validar;
   public function __construct()
   {
      $validar = new Validacao();
      $this->validar = $validar;
      unset($validar);
      // $conexao = new Conexao();//cria uma conexao mysqli
      //$this->conn = $conexao->getConn();//armazena em conn
      // unset($conexao);//exclui o objeto de conexao ja criado

   }
   private function getValidar()
   {
      return $this->validar;
   }


   public function criptografaSenha(string $senha)
   {
      $senha = $this->getValidar()->valStr($senha);
      //cria um hash usando a senha fornecida como parametro e criptografa, apos isso retorna a senha criptografada

      $cript = new Criptografia();
      $senhaCript = $cript ->criptografaSenha("MG123456");
      $hash= $senhaCript; 

      return $senha;
   }

   public function comparaSenha(string $senha, string $senhaCript)
   {
      $senha1 = $this->getValidar()->valStr($senha);
      $senha2 = $this->getValidar()->valStr($senhaCript);
      //compara a senha 1 com o hash da senha 2 vinda do banco de dados, se iguais retorna true senao false
      $hash= $senha1;
      if (password_verify($senha, $hash)){
         echo "Senha correta!";
       } else{
         echo "Senha incorreta!";
       }
   }

   public function criptografa(mixed $dados)
   {
      $dados = $this->getValidar()->valStr($dados);
      //criptografa dados de forma normal e os retorna
      return $dados;
   }

   public function criptografaArray(array $dados)
   { $hash = $dados;
      for ($i = 0; $i < count($dados); $i++) {
         $dados[$i] = $this->validar->valStr($dados[$i]);
      } 
      //criptografa cada elemento de um array e o retorna

   }
   public function descriptografa(mixed $dados)
   {
      $dados = $this->getValidar()->valStr($dados);
      //descriptografa dados de forma normal e os retorna

      $dados = new Criptografia();
      $dadosCript = $dados ->descriptografa("sssssssss");
      $hash= "$2y$10$8sA2N5Sx/1zMQv2yrTDAaOFlbGWECrrgB68axL.hBb78NhQdyAqWm"; 
      $verificar = ($hash($dadosCript, $hash));
      if ($verificar != $dadosCript){
         echo "Erro ao descriptografar senha";
      } else {
         echo $dadosCript; 
      }
   }

   public function descriptografaArray(array $dados)
   {
      for ($i = 0; $i < count($dados); $i++) {
         $dados[$i] = $this->validar->valStr($dados[$i]);

      }
      //descriptografa cada elemento de um array e o retorna

   }
} 



/*
   if (isset($_POST['verify'])){
      $senha = strip_tags(filter_input(INPUT_POST,'senha', FILTER_DEFAULT));
      $nome = strip_tags(filter_input(INPUT_POST,'nome', FILTER_DEFAULT));
      $matricula = strip_tags(filter_input(INPUT_POST,'matricula', FILTER_DEFAULT));

      $hash = password_hash($senha, PASSWORD_DEFAULT);
       $insert = $pdo->prepare("INSERT INTO cms_usuarios (user_nome, user_matricula, user_senha)VALUES (:nome, :matricula, :senha)"); 

       $insert->bindValue(':nome', $nome);
       $insert->bindValue(':matricula', $matricula);
       $insert->bindValue(':senha', $senha);
       $insert->execute();
      
       if($insert){
          echo 'Usuário cadastrado';
       }else{
           echo 'Usuário não cadastrado';}
   };
   */

