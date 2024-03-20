<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRAR</title>
</head>
<body>
<body>
    <form action="processar-dados-paciente.php" method="post">
        <select name="cargo" id="genero">
	       <option value="F">Feminino</option>
	       <option value="M">Masculino</option>
	       <option value="Outro">Outro</option>
        <label for="nome"> Nome:</label>
        <input type="text" name="nome" placeholder= " Digite seu nome: ">
        <label for="nome"> Peso:</label>
        <input type="float" name="peso" placeholder= " Digite seu peso: ">
     </select>
     <button type="submit"> Cadastrar </button>
    </form>
</body>
</html>