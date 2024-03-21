// Pegar os elementos relevantes do DOM
var modal = document.getElementById("myModal");
var btnAbrirModal = document.getElementById("openModalBtn");
var spanFecharModal = document.getElementsByClassName("close")[0];

// Quando o usuário clicar no botão, abrir o modal
btnAbrirModal.onclick = function() {
  modal.style.display = "block";
}

// Quando o usuário clicar no botão de fechar, fechar o modal
spanFecharModal.onclick = function() {
  modal.style.display = "none";
}

// Quando o usuário clicar fora do modal, fechar o modal
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Função para lidar com o envio do formulário
document.getElementById("myForm").onsubmit = function() {
    // Aqui você pode adicionar código JavaScript para lidar com o envio do formulário, como validação ou envio de dados
    alert("Formulário enviado!");
    return false; // Isso evita que o formulário seja enviado de verdade (apenas para este exemplo)
}