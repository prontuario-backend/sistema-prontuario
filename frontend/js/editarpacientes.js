function editarCampo(idSpan) {
    var span = document.getElementById(idSpan);
    var conteudoAtual = span.textContent;

    // Criar um campo de entrada para edição
    var input = document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("id", "input-" + idSpan);
    input.value = conteudoAtual;

    // Substituir o span pelo campo de entrada
    span.innerHTML = '';
    span.appendChild(input);

    // Adicionar um evento para salvar as alterações quando o usuário pressionar Enter
    input.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            salvarEdicao(idSpan);
        }
    });
}

function salvarEdicao(idSpan) {
    var input = document.getElementById("input-" + idSpan);
    var novoConteudo = input.value;

    // Restaurar o conteúdo do span com o novo conteúdo
    var span = document.getElementById(idSpan);
    span.textContent = novoConteudo;
}