document.addEventListener("DOMContentLoaded", function () {
    // Obtém a referência ao elemento de entrada de data
    var inputDate = document.getElementById('txDataCadastro');

    // Obtém a data atual no formato "AAAA-MM-DD"
    var dataAtual = new Date().toISOString().split('T')[0];

    // Define a data atual como valor padrão para o campo de entrada de data
    inputDate.value = dataAtual;
});