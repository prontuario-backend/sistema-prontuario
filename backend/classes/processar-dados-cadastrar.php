<?php
    include "./database/conexao.php";
    include "./auxiliar/criptografia.class.php";
    include "./auxiliar/coren.class.php";
    include "./auxiliar/crm.class.php";
    include "./inter/interEnf.class.php";
    include "./inter/interMed.class.php";

    $conexao = new Conexao();
    $conexao->getConn();

    if(isset($_POST['cargo'])){
        if($cargo==$matricula){
            echo "A matrícula confere com o cargo! ";
        } else{
            echo "A matrícula não confere com o cargo! ";
        }
    }

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

