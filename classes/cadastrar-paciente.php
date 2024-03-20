<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Paciente</title>
</head>
<body>
    <form action="processar-dados-paciente.php" method="post">
        <label for="nome"> Nome:</label>
        <input type="text" name="nome" placeholder= " Digite seu nome: ">
        <label for="nome"> CPF:</label>
        <input type="number" name="cpf" placeholder= " Digite seu CPF: ">
        <label for="nome"> Data de nascimento:</label>
        <input type="data" name="dataNasc" placeholder= " Digite sua data de nascimento: ">
        <label for="nome"> Telefone:</label>
        <input type="number" name="telefone" placeholder= " Digite seu telefone: ">
        <label for="nome"> Endereço:</label>
        <input type="text" name="endereco" placeholder= " Digite seu endereco: ">
        <label for="nome"> CEP:</label>
        <input type="number" name="cep" placeholder= " Digite seu CEP: ">
        <label for="nome"> Raça: </label>
        <input type="text" name="corRaca" placeholder= " Digite sua raça: ">
        <label for="nome"> Nome da mãe: </label>
        <input type="text" name="mae" placeholder= " Digite o nome da sua mãe: ">
        <label for="nome"> Nome do pai:</label>
        <input type="text" name="pai" placeholder= " Digite o nome do seu pai: ">
        <label for="nome"> Altura: </label>
        <input type="float" name="altura" placeholder= " Digite sua altura: ">
        <label for="nome"> Peso:</label>
        <input type="float" name="peso" placeholder= " Digite seu peso: ">
        <label for="nome"> Gênero:</label>
        <select name="genero" id="genero">
	       <option value="F">Feminino</option>
	       <option value="M">Masculino</option>
	       <option value="Outro">Outro</option>
     </select>
     <button type="submit"> Cadastrar </button>
    </form>
</body>
</html>