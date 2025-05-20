function calcular() {
    const divNome = document.getElementById('nome').value;
    const divDesc = document.getElementById('descricao').value;

    if (divNome && divDesc) {
        const novaDiv = document.createElement("div");

        const paragrafo = document.createElement("p");
        paragrafo.textContent = divNome + " - descrição: " + divDesc;

        const deletar = document.createElement("button");
        deletar.textContent = "Deletar";

        // Evento para deletar a div quando o botão for clicado
        deletar.onclick = function() {
            novaDiv.remove();
        };

        novaDiv.appendChild(paragrafo);
        novaDiv.appendChild(deletar);

        // Adicionando o novo cartão à área de cartões
        const areaCartao = document.getElementById("cartao");
        areaCartao.appendChild(novaDiv);
    } else {
        alert("Preencha todos os campos!");
    }
}