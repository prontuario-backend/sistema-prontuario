function alterarConteudo(data, hora, tipo, liquido) {
    var tabela = document.getElementById("minhaTabela");
    var qtdLinhas = tabela.ariaRowSpan.length;
    var linha = tb.insertRow(qtdLinhas);
    var tbody = tabela.getElementsByTagName("tbody")[0];

    var cellData = linha.insertCell(0);
    var cellHora = linha.InsertCell(1);
    var cellTipo = linha.insertCell(2);
    var cellLiquido = linha.insertCell(3);

    cellCodigo.innerHTML = qtdLinhas;
    cellData.innerHTML = data;
    cellHora.innerHTML = hora;
    cellTipo.innerHTML = tipo;
    cellLiquido.innerHTML = liquido;

    // Limpar o conteúdo da tabela
    tbody.innerHTML = "";

    // Novos dados para a tabela
    var novosDados = [
        { nome: "Ana", sobrenome: "Oliveira", idade: 28 },
        { nome: "Carlos", sobrenome: "Santana", idade: 40 },
        { nome: "Laura", sobrenome: "Silveira", idade: 33 }
    ];

    // Adicionar os novos dados à tabela
    novosDados.forEach(function(dado) {
        var newRow = tbody.insertRow();
        var nomeCell = newRow.insertCell(0);
        var sobrenomeCell = newRow.insertCell(1);
        var idadeCell = newRow.insertCell(2);
        nomeCell.innerHTML = dado.nome;
        sobrenomeCell.innerHTML = dado.sobrenome;
        idadeCell.innerHTML = dado.idade;
    });
}

// Chamar a função para alterar o conteúdo da tabela