<?php
include_once __DIR__ . '/includeAux.php';
class Email
{

    private string $email;
    public function __construct(string $email)
    {
        $validar = new Validacao();
        $email = $validar->valStr($email);
        unset($validar);
        if ($this->validarEmail($email) === true) {
            $this->email = $email;
        } else {
            throw new Exception('Erro, endereço de email invalido.');
        }
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function validarEmail(string $email)
    {
        // Verificação de formato básico
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        // Verificação do domínio MX
        list($user, $domain) = explode('@', $email);
        if (!checkdnsrr($domain, 'MX')) {
            return false;
        }

        // Tentativa de envio de e-mail de verificação
        $subject = "Verificação de e-mail";
        $message = "Este é um e-mail de verificação.";
        $headers = "From: your@example.com";

        if (!mail($email, $subject, $message, $headers)) {
            return false;
        }

        return true;
    }
}




