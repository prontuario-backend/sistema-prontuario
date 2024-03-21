<?php
include_once __DIR__ . '/includeAux.php';
/*
Esta classe e responsavel por criptografar e descriptografar dados no geral, ela e capaz
de criptografar e descriptografar strings, senhas(so criptografa e compara) e arrays.

*/

class Criptografia
{
   public function __construct()
   {

      // $conexao = new Conexao();//cria uma conexao mysqli
      //$this->conn = $conexao->getConn();//armazena em conn
      // unset($conexao);//exclui o objeto de conexao ja criado

   }



   public function criptografaSenha(string $senha)
   {

      //cria um hash usando a senha fornecida como parametro e criptografa, apos isso retorna a senha criptografada
      return $senha;
   }

   public function comparaSenha(string $senha1, string $senha2)
   {

      //compara a senha 1 com o hash da senha 2 vinda do banco de dados, se iguais retorna true senao false

   }

   public function criptografa(mixed $dados)
   {

      //criptografa dados de forma normal e os retorna

   }

   public function criptografaArray(array $dados)
   {
      for ($i = 0; $i < count($dados); $i++) {
         // $dados[$i] = $dados[$i];

      }
      return $dados;
      //criptografa cada elemento de um array e o retorna

   }
   public function descriptografa(mixed $dados)
   {
      
      //descriptografa dados de forma normal e os retorna

   }

   public function descriptografaArray(array $dados)
   {
      for ($i = 0; $i < count($dados); $i++) {
         // $dados[$i] = $dados[$i];

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

$cript = new Criptografia();
$cript->criptografaSenha('123456');