<?php
include './database/conecao.class.php';
include './auxiliar/criptografia.class.php';
include './classes/medico.class.php';
/*
intermediario da classe medico
esta classe responsavel por fazer o crud dos dados de um medico os valida e salva-los no banco de dados.
*/
class InterMedico{

    private mysqli $conn;
    public function __construct(){
        $conexao = new Conexao();
        $this->conn = $conexao->getConn();
        unset($conexao);
    }

    public function create($nome, $coren, $senha)
    {
        //logica banco de dados
    }

    public function read(){
        //logica banco de dados
    }
    public function update(){
        //logica banco de dados
    }
    public function delete(){

    }

    public function fazerLogin($nome, $coren, $senha)
    {
        // Lógica para fazer login
    }

    function redefinirSenha(Crm $crm, string $novaSenha) {
        // Verifica se o corem é válido
        $crm = $crm->getCrm();
    
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
            $stmt->bindParam(':crm', $crm);
            $stmt->execute();
    
            return "Senha redefinida com sucesso.";
        } catch (PDOException $e) {
            return "Erro ao redefinir a senha: " . $e->getMessage();
        }
    }

    public function alterarNome($novoNome)
    {
        //logica banco de dados
    }

    public function deslogar()
    {
        //logica para deslogar
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
    public function getConn(){
        //retorna um objeto de conexao mysqli referente ao atributo 'conn'
        if($this->conn == null){
            //se a conexao nao tiver sido estabelecida retorna erro
            throw new Exception('Erro, não e possivel retornar o atributo $conn pois uma conexão ainda não foi criada.');
        }else{
            return $this->conn;
        }
    }
}