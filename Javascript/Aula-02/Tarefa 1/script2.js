    // QUESTÃO 1


var div = document.getElementById("div1");


div.style.background = 'green';
div.style.color = 'white';
div.style.width = "300px";
div.style.height = "300px";
div.style.lineHeight = "300px";  
div.style.textAlign = "center";


div.addEventListener('click', clicar);
div.addEventListener('mouseenter', entrar);
div.addEventListener('mouseout', sair);


function clicar() {
    div.innerText = 'Clicou!';
    div.style.background = 'purple';
}


function entrar() {
    div.innerText = 'Entrou!';
    div.style.background = 'red';
    div.style.width = "500px";
    div.style.height = "500px";
}


function sair() {
    div.innerText = 'Saiu!';
    div.style.background = 'blue';
    div.style.width = "300px"; //Volta ao tamanho normal
    div.style.height = "300px"; //Volta ao tamanho normal
}

//Questão 2

var inputText = document.getElementById('inputText');
var output = document.getElementById('output');

// Adiciona um ouvinte de evento 'input' para monitorar o que o usuário digita
inputText.addEventListener('input', function() {
    output.textContent = inputText.value;  // Atualiza o texto exibido com o valor digitado
});


var outradiv = document.getElementById("outradiv");{

div.outradiv 
        div.style.marginTop = "20px";
        div.style.fontSize = "18px";
        div.style.color = "#333";
    }


//Questão 3

var botaodiv = document.getElementById('botaodiv');{
var CONTAR = document.getElementById('CONTAR');

// Variável para armazenar a contagem de cliques
var count = 0;


botao.addEventListener('click', function() {
    count++;  // Aumenta a contagem a cada clique
    CONTAR.textContent = "Número de cliques: " + count;  // Atualiza a contagem q exibe na página
});

div.CONTAR 
    div.style.fontSize = "24px";
    div.style.marginTop = "20px";
    div.style.color = "#333";

    
div.botaodiv
    div.style.padding = "20px";
    div.style.fontSize = "16px";
    div.style.cursor = "pointer";

}

//Questão 4


window.onload = function() {
    // Criar a div
    var mensagem = document.createElement('mensagem');
    
    // Definir o conteúdo da div
    div.innerHTML = "Bem-vindo à nossa página!";
    
    // Atribuir estilos à div
    div.style.backgroundColor = 'lightblue';
    div.style.color = 'darkblue';
    div.style.padding = '20px';
    div.style.borderRadius = '10px';
    div.style.fontSize = '20px';
    div.style.margin = '0 auto';
    div.style.width = '60%';
    div.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)';
    
    // Adicionar a div ao corpo da página
    document.body.appendChild(estilo);

    div.body 
        div.style.fontFamily = Arial, "sans-serif";
        div.style.textAlign = "center";
        div.style.paddingTop = "50px";
    
}

