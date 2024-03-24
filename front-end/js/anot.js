var modoExclusao = false;

function toggleExclusao() {
    modoExclusao = !modoExclusao;

    if (modoExclusao) {
        document.querySelectorAll('.caixa').forEach(caixa => {
            // Adiciona a classe 'position-relative' à caixa de anotação
            caixa.classList.add('position-relative');

            var checkbox = document.createElement('input');
            checkbox.type = 'checkbox';
            checkbox.className = 'checkboxExcluir';

            // Adiciona a caixa de seleção à caixa de anotação
            caixa.appendChild(checkbox);
        });

        var botaoExcluir = document.createElement('button');
        botaoExcluir.textContent = 'Excluir selecionados';
        botaoExcluir.className = 'btn-pop';
        botaoExcluir.onclick = excluirAnotacoes;
        document.querySelector('.buttonPosition').appendChild(botaoExcluir);
    } else {
        document.querySelectorAll('.checkboxExcluir').forEach(checkbox => {
            checkbox.remove();
        });

        document.querySelectorAll('.caixa').forEach(caixa => {
            // Remove a classe 'position-relative' da caixa de anotação
            caixa.classList.remove('position-relative');
        });

        var botaoExcluir = document.querySelector('.btn-pop');
        if (botaoExcluir) {
            botaoExcluir.remove();
        }
    }
}

function excluirAnotacoes() {
    var checkboxes = document.querySelectorAll('.checkboxExcluir:checked');
    checkboxes.forEach(checkbox => {
        checkbox.parentNode.remove();
    });

    // Remover as caixas de seleção após a exclusão
    document.querySelectorAll('.checkboxExcluir').forEach(checkbox => {
        checkbox.remove();
    });

    var botaoExcluir = document.querySelector('.btn-pop');
    if (botaoExcluir) {
        botaoExcluir.remove();
    }
}

function openPopup() {
    document.getElementById('popup').style.display = 'block';
    document.querySelector('.overlay').style.display = 'block';
    document.querySelector('.btn-pop-save').style.display = 'block'; // Mostra o botão de salvar
}

function closePopup() {
    document.getElementById('popup').style.display = 'none';
    document.querySelector('.overlay').style.display = 'none';
}

function addAnotacao() {
    var anotacaoTitle = document.getElementById('anotacaoTitle').value;
    var anotacaoDate = document.getElementById('anotacaoDate').value;
    var anotacaoText = document.getElementById('anotacaoText').value;
    var anotacaoTime = document.getElementById('anotacaoTime').value;

    // Verificar se o título e a data estão preenchidos
    if (anotacaoTitle === "" || anotacaoDate === "" || anotacaoTime === "") {
        alert("Por favor, selecione uma data e insira um título.");
        return;
    }

    var caixa = document.createElement('div');
    caixa.className = 'caixa';

    var titulo = document.createElement('h3');
    titulo.textContent = 'Título: ' + anotacaoTitle;
    caixa.appendChild(titulo);

    // Limitando o texto da anotação a 360 caracteres
    var anotacaoTextLimited = anotacaoText.substring(0, 360);

    // Formatação da data para DD/MM/AA
    var dataFormatada = new Date(anotacaoDate);
    var dia = dataFormatada.getDate().toString().padStart(2, '0');
    var mes = (dataFormatada.getMonth() + 1).toString().padStart(2, '0');
    var ano = dataFormatada.getFullYear().toString().slice(-2); // Pegar os últimos dois dígitos do ano
    var dataString = dia + '/' + mes + '/' + ano + ' |  ';

    var data = document.createElement('span');
    data.textContent = dataString + anotacaoTime;
    data.className = 'data'; // Adicionar a classe para ajuste de estilo
    titulo.appendChild(data);
    // Dividindo o texto em substrings de 120 caracteres
    var substrings = [];
    while (anotacaoText.length > 0) {
        substrings.push(anotacaoText.substring(0, 130));
        anotacaoText = anotacaoText.substring(130);
    }

    // Adicionando cada substring em um parágrafo
    substrings.forEach(substring => {
        var texto = document.createElement('p');
        texto.textContent = substring;
        caixa.appendChild(texto);
    });

    document.querySelector('.conteudo').appendChild(caixa);
    closePopup();
    document.getElementById('anotacaoTitle').value = ''; // Limpa o campo de título após adicionar a anotação
    document.getElementById('anotacaoDate').value = ''; // Limpa o campo de data após adicionar a anotação
    document.getElementById('anotacaoTime').value = '';
    document.getElementById('anotacaoText').value = ''; // Limpa o campo de texto após adicionar a anotação

    // Após adicionar a anotação, verifique se há anotações
    verificarAnotacoes();
}

// Função para verificar se há anotações e exibir ou ocultar o elemento .conteudo conforme necessário
function verificarAnotacoes() {
    var conteudo = document.querySelector('.container-conteudo');
    var anotacoes = document.querySelectorAll('.caixa');

    if (anotacoes.length === 0) {
        conteudo.style.display = 'none'; // Oculta o elemento .conteudo se não houver anotações
    } else {
        conteudo.style.display = 'flex'; // Exibe o elemento .conteudo se houver anotações
    }
}

// Chame a função verificarAnotacoes() quando a página for carregada para verificar inicialmente se há anotações
window.onload = function () {
    verificarAnotacoes();
};