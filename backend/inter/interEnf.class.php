<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'includeInter.php';

/*
esta classe responsavel por fazer o crud dos dados de um enfermeiro os valida e salva-los no banco de dados.
*/
//intermediario da classe enferemeiro

class InterEnf
{

    private mysqli $conn;
    public function __construct()
    {
        $conexao = new Conexao();
        $this->conn = $conexao->getConn();
        unset($conexao);
    }


    public function create(Enfermeiro $enfermeiro)
    {
        $this->getConn();
        $nome = $enfermeiro->getNome();
        $coren = $enfermeiro->getCoren();
        $senha = $enfermeiro->getSenha();
        unset($enfermeiro);
        $res = $this->verificaEnf($coren);
        if ($res !== true) {
            $sql = "INSERT INTO enfermeiro (nome, coren, senha)
            VALUES ('$nome', '$coren', '$senha');";
            $resultado = $this->getConn()->query($sql);
            return $resultado;
        } else {
            throw new Exception('ja exite um usuario com estas credenciais.');
        }

    }
    public function read()
    {

        $this->getConn();
        $sql = "SELECT * FROM enfermeiro ORDER BY coren ";
        $resultado = $this->getConn()->query($sql);
        return $resultado;
    }
    public function updateNome($nome, )
    {
        $this->getConn();
        $sql = "UPDATE enfermeiro SET nome = '$nome' WHERE id_anotacaoEnfermagem= 1";
        $resultado = $this->getConn()->query($sql);
        return $resultado;
        /*
UPDATE enfermeiro
SET nome = 'Novo Nome', coren = 'Novo COREN', senha = 'Nova Senha'
        */
    }
    public function updateCoren($coren)
    {
        $this->getConn();

        $sql = "UPDATE enfermeiro SET coren = '$coren' WHERE id_anotacaoEnfermagem= 1";
        $resultado = $this->getConn()->query($sql);
        return $resultado;
        /*
UPDATE enfermeiro
SET nome = 'Novo Nome', coren = 'Novo COREN', senha = 'Nova Senha'
        */
    }
    public function updateSenha($senha)
    {
        $this->getConn();
        $sql = "UPDATE enfermeiro SET senha = '$senha' WHERE id_anotacaoEnfermagem= 1";
        $resultado = $this->getConn()->query($sql);
        return $resultado;
        /*
UPDATE enfermeiro
SET nome = 'Novo Nome', coren = 'Novo COREN', senha = 'Nova Senha'
        */
    }
    public function delete()
    {
        $this->getConn();
        $sql = "DELETE FROM enfermeiro WHERE id_anotacaoEnfermagem = 1";
        $resultado = $this->getConn()->query($sql);
        return $resultado;
        /*
DELETE FROM enfermeiro WHERE crm = $crm;
     */
    }

    public function fazerLogin($coren, $senha)
    {
        $this->getConn();
        $sql = "SELECT `id_enfermeiro`, `nome`, `coren`, `senha` FROM `enfermeiro` WHERE coren = '$coren' AND senha = '$senha'";

        $consulta = $this->conn->prepare($sql);
        $consulta->execute();

        // Obter o resultado da consulta
        $result = $consulta->get_result();

        // Verificar se encontrou algum usuário
        if ($result->num_rows == 1) {
            return mysqli_fetch_assoc($result);
        } else {
            return false;
        }

        // Fechar a consulta
    }

    public function verificaEnf($coren)
    {
        $this->getConn();
        $sql = "SELECT `id_enfermeiro`, `nome`, `coren`, `senha` FROM `enfermeiro` WHERE coren = '$coren'";

        $consulta = $this->conn->prepare($sql);
        $consulta->execute();

        // Obter o resultado da consulta
        $result = $consulta->get_result();

        // Verificar se encontrou algum usuário
        if ($result->num_rows == 1) {
            return mysqli_fetch_assoc($result);
        } else {
            return false;
        }

        // Fechar a consulta
    }


    public function alterarNome($novoNome, $coren)
    {
        $this->getConn();

        // Preparar a consulta SQL usando prepared statements
        $sql = "UPDATE enfermeiro SET nome = $novoNome WHERE coren = $coren";
        $consulta = $this->conn->prepare($sql);
        $consulta->bind_param("ss", $novoNome, $coren);
        $consulta->execute();
        $consulta->close();
        // Verificar se a atualização foi bem-sucedida
        if ($consulta->affected_rows > 0) {
            // Nome alterado com sucesso
            return true;

        } else {
            // Não foi possível alterar o nome
            return false;
        }

        // Fechar a consulta

    }

    // Função para redefinir a senha
    function redefinirSenha(Coren $corem, string $novaSenha, $nome, $coren, $senha)
    {

        // $sql = "UPDATE enfermeiro
        // SET nome = '$nome',
        //   coren = '$coren',
        //     exameFisico = '$senha',
        // WHERE id_enfermeiro = 1";
        // $resultado = $this->getConn()->query($sql);
        // return $resultado;
        /*

        UPDATE enfermeiro
        SET nome = 'Novo Nome', coren = 'Novo COREN', senha = 'Nova Senha'
        */




        // Verifica se o corem é válido
        $corem = $corem->getCoren();

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
            $mysqli = new PDO("mysql:host=localhost:3306;dbname=id21959013_prontuariodb", "id21959013_bhdev", "#Proz2022");
            $mysqli->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $mysqli->prepare("UPDATE paciente SET senha_hash = $senhaHash WHERE corem = $corem");/*troquei usuarios por paciente pois n existe usuario na tabela e adicionei
no paciente sua senha hash pq n existia pode ter um possivel erro nesse codigo de conexao */
            $stmt->bindParam(':senhaHash', $senhaHash);
            $stmt->bindParam(':corem', $corem);
            $stmt->execute();

            return "Senha redefinida com sucesso.";
        } catch (PDOException $e) {
            return "Erro ao redefinir a senha: " . $e->getMessage();
        }
    }




    public function fecharConexao()
    {
        //fecha uma conexao ja iniciada
        if ($this->conn == null) {
            //se a conexao nao tiver sido estabelecida retorna erro
            throw new Exception('Erro, não e possivel fechar a conexão pois uma conexão ainda não foi criada.');
        } else {
            // session_destroy();
            $this->conn->close();
            unset($this->conn);
        }
    }
    public function getConn()
    {
        //retorna um objeto de conexao mysqli referente ao atributo 'conn'
        if ($this->conn == null) {
            //se a conexao nao tiver sido estabelecida retorna erro
            throw new Exception('Erro, não e possivel retornar o atributo $conn pois uma conexão ainda não foi criada.');
        } else {
            return $this->conn;
        }
    }
}