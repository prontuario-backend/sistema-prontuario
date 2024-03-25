<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'includeInter.php';
/*
intermediario da classe medico
esta classe responsavel por fazer o crud dos dados de um medico os valida e salva-los no banco de dados.
*/
class InterMed
{

    private mysqli $conn;
    public function __construct()
    {
        $conexao = new Conexao();
        $this->conn = $conexao->getConn();
        unset($conexao);
    }

    public function create(Medico $medico)
    {
        $this->getConn();
        // $res = $this->fazerVerificaMed($medico->getCrm());
        $nome = $medico->getNome();
        $crm = $medico->getCrm();
        $senha = $medico->getSenha();
        unset($medico);
        $sql = "INSERT INTO medico (id, nome, crm, senha)
            VALUES (default, '$nome', '$crm', '$senha')";

        $resultado = $this->getConn()->query($sql);
        return $resultado;
    }

    public function read($crm)
    {
        $this->getConn();
        $sql = "SELECT * FROM medico WHERE crm = '$crm'";
        $resultado = $this->getConn()->query($sql);
        return $resultado->fetch_assoc();

    }
    public function update($nome, $crm, $senha)
    {
        $this->getConn();


        $sql = "UPDATE medico
        SET nomeComp = '$nome',
            crm = '$crm',
            senha = '$senha'
        WHERE id_medico = 1";


        $resultado = $this->getConn()->query($sql);
        return $resultado;

    }
    public function delete()
    {
        $this->getConn();
        $sql = "DELETE FROM medico WHERE id_medico = 1";

        $resultado = $this->getConn()->query($sql);
        return $resultado;

    }

    public function fazerLogin($crm, $senha)
    {
        $this->getConn();

        try {
            // Preparar a consulta SQL usando prepared statements
            $sql = "SELECT * FROM medico WHERE crm = '$crm' AND senha = '$senha'";
            $stmt = $this->conn->prepare($sql);
            // $stmt->bind_param("ss", $nome, $crm);
            $stmt->execute();

            // Obter o resultado da consulta
            $result = $stmt->get_result();

            // Verificar se encontrou algum médico
            if ($result->num_rows == 1) {
                $medico = $result->fetch_assoc();
                // Verificar se a senha está correta
                if (password_verify($senha, $medico['senha'])) {
                    // Senha correta, login bem-sucedido
                    return mysqli_fetch_assoc($result);
                } else {
                    // Senha incorreta
                    return false;
                }
            } else {
                // Médico não encontrado
                return false;
            }
        } catch (Exception $e) {
            // Tratar qualquer exceção que ocorra durante a execução da consulta
            echo "Erro ao fazer login: " . $e->getMessage();
            return false;
        } finally {
            // Fechar a consulta
            $stmt->close();
        }
    }
    public function fazerVerificaMed($crm)
    {
        $this->getConn();

        try {
            // Preparar a consulta SQL usando prepared statements
            $sql = "SELECT * FROM medico WHERE crm = '$crm'";
            $stmt = $this->conn->prepare($sql);
            // $stmt->bind_param("ss", $nome, $crm);
            $stmt->execute();

            // Obter o resultado da consulta
            $result = $stmt->get_result();

            // Verificar se encontrou algum médico
            if ($result->num_rows == 1) {
                $medico = $result->fetch_assoc();
                // Verificar se a senha está correta
                // Senha correta, login bem-sucedido
                return $medico;
            } else {
                // Médico não encontrado
                return false;
            }
        } catch (Exception $e) {
            // Tratar qualquer exceção que ocorra durante a execução da consulta
            echo "Erro ao fazer login: " . $e->getMessage();
            return false;
        } finally {
            // Fechar a consulta
            $stmt->close();
        }
    }

    public function redefinirSenha(Crm $crm, string $novaSenha)
    {
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
            $mysqli = new PDO("mysql:host=localhost:3306;dbname=id21959013_prontuariodb", "id21959013_bhdev", "#Proz2022");
            $mysqli->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $mysqli->prepare("UPDATE medico SET senha_hash = '$senhaHash'WHERE corem = '$crm'");
            $stmt->bindParam(':senhaHash', $senhaHash);
            $stmt->bindParam(':crm', $crm);
            $stmt->execute();

            return "Senha redefinida com sucesso.";
        } catch (PDOException $e) {
            return "Erro ao redefinir a senha: " . $e->getMessage();
        }
    }

    public function alterarNome($novoNome, $crm)
    {
        $this->getConn();

        try {
            // Preparar a consulta SQL usando prepared statements
            $sql = "UPDATE medico SET nomeComp = '$novoNome' WHERE crm = '$crm'";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ss", $novoNome, $crm);
            $stmt->execute();

            // Verificar se a alteração foi bem-sucedida
            if ($stmt->affected_rows > 0) {
                // Nome alterado com sucesso
                return true;
            } else {
                // Não foi possível alterar o nome
                return false;
            }
        } catch (Exception $e) {
            // Tratar qualquer exceção que ocorra durante a execução da consulta
            echo "Erro ao alterar o nome: " . $e->getMessage();
            return false;
        } finally {
            // Fechar a consulta
            $stmt->close();
        }
    }

    public function deslogar()
    {
        // Iniciar a sessão (se ainda não estiver iniciada)
        session_start();

        // Destruir a sessão, o que remove todas as variáveis de sessão
        session_destroy();

        // Redirecionar o usuário de volta para a página de login
        header("Location: pagina_de_login.php");//se existir claro, pois n econtrei no projeto...
        exit; // Certifique-se de que o script seja encerrado após o redirecionamento
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
