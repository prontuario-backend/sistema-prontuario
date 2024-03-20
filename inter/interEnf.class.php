<?php
include './database/conecao.class.php';
include './auxiliar/criptografia.class.php';
include './classes/enfermeiro.php';
include  './auxiliar/coren.class.php';
/*
esta classe responsavel por fazer o crud dos dados de um enfermeiro os valida e salva-los no banco de dados.
*/
//intermediario da classe enferemeiro

class InterEnf {

    private mysqli $conn;
    public function __construct(){
        $conexao = new Conexao();
        $this->conn = $conexao->getConn();
        unset($conexao);
    }

    
    // public function create($nome, $coren, $senha){

    // }
    // public function read($nome, $coren, $senha){
    
    // }
    // public function updateNome($nome){
    
    // }
    // public function updateCoren($coren){

    // }
    // public function updateSenha(){

    // }
    public function delete($nome, $coren, $senha){
    
    }



    public function fazerLogin($nome, $coren, $senha)
    {
        // Lógica para fazer login
    }

 // Função para redefinir a senha
function redefinirSenha(Coren $corem, string $novaSenha) {
    // Verifica se o corem é válido


    // Verifica se a nova senha é forte o suficiente (você pode implementar sua própria lógica aqui)
    if (strlen($novaSenha) < 8) {
        return "A senha deve ter pelo menos 8 caracteres.";
    }

    // Gere um hash de senha seguro com um salt aleatório
    $salt = bin2hex(random_bytes(32));
    $senhaComSalt = $novaSenha . $salt;
    $senhaHash = password_hash($senhaComSalt, PASSWORD_BCRYPT);

    // Atualize a senha no banco de dados
    try {
        $mysqli = new PDO("mysql:host=localhost;dbname=seu_banco_de_dados_Ezequiel", "seu_usuario", "sua_senha");
        $mysqli->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $mysqli->prepare("UPDATE usuarios SET senha_hash = :senhaHash WHERE corem = :corem");
        $stmt->bindParam(':senhaHash', $senhaHash);
        $stmt->bindParam(':corem', $corem->getCoren());
        $stmt->execute();

        return "Senha redefinida com sucesso.";
    } catch (PDOException $e) {
        return "Erro ao redefinir a senha: " . $e->getMessage();
    }
}
    public function alterarNome($novoNome)
    {
        // Lógica para alterar nome
    }


    
    public function fecharConexao(){
        //fecha uma conexao ja iniciada
        if($this->conn == null){
            //se a conexao nao tiver sido estabelecida retorna erro
            throw new Exception('Erro, não e possivel fechar a conexão pois uma conexão ainda não foi criada.');
        }else{
            // session_destroy();
            $this->conn->close();
            unset($this->conn);
        }
    }
}