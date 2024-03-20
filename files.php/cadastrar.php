<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRAR</title>
</head>

<body>

    <body>
        <form action="processar-dados-cadastrar.php" method="post">
            <select name="cargo" id="cargo">
                <option value="F">Enfermeiro</option>
                <option value="M">Médico</option>
            </select>
            <label for="nome"> Nome:</label>
            <input type="text" name="nome" placeholder=" Digite seu nome">
            <label for="nome"> CRM/COREM:</label>
            <input type="string" name="matricula" placeholder=" 00000-MG ou COREN-MG-00000-ENF ">
            <label for="nome"> Senha: </label>
            <input type="password" name="senha" placeholder=" Digite uma senha">
            <button type="submit" name="verify"> Cadastrar </button>
        </form>
        <a href="recuperar_senha.php"> Esqueceu a senha?</a>
    </body>

</html>