<?php
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$crmOuCoren = $_POST["crmOuCoren"];

$arr =['nome'=> $nome,
'senha'=> $senha,
'crmOuCoren'=> $crmOuCoren];

echo json_encode($arr);