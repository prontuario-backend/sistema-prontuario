<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografia</title>
</head>
<body>
     <form action="criptografia.php" method="post">
            <label for="nome"> CRM/COREM </label>
            <input type="float" name="matricula" required>
            <wbr>
            <label for="nome"> Nome: </label>
            <input type="text" name="nome" required>
            <wbr>
            <label for="nome"> senha </label>
            <input type="password" name="senha" required> 

            <button type ="submit" name="verify">Cadastrar</button>
        </form>
</body>
       
<?php 
   $pdo = new PDO('mysql: host=localhost; dbname=teste', 'root','');
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
?>
</html>