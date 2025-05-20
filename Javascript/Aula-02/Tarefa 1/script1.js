
//Questão 1
function alertDeClick(){

var nome = document.getElementById("nome").value;

document.getElementById("resultadonome").innerHTML = "resultado: " + nome;


}

//Questão 2


function verificarParImpar() { // Função que verifica se o número é par ou ímpar
    var numero = document.getElementById('numero').value; // Obtém o valor digitado no campo de entrada
    var resultado = document.getElementById('resultadoimpar'); // Obtém o elemento onde o resultado será exibido



if (isNaN(numero) || numero === "") { // Verifica se o valor não é um número ou se está vazio
    
} else {
    var num = parseInt(numero); // Converte o valor para um número inteiro
    document. getElementById ("resultadoimpar").innerHTML = num % 2 === 0 ? "É PAR" : "É ÍMPAR"; // Verifica se o número é par ou ímpar e exibe o resultado
}
}

//Questão 3


function converterParaCaixaAlta(str) { // Função que converte uma string para caixa alta
    return str.toUpperCase(); // Retorna a string com todas as letras em caixa alta
}
function exibirResultado() {// Função que será chamada para exibir o resultado ao clicar no botão
    var inputTexto = document.getElementById("inputTexto").value;// Obtém o valor da string digitada
    var resultado = converterParaCaixaAlta(inputTexto); // Chama a função para converter o texto para caixa alta
    document.getElementById("resultadoCaixaAlta").innerHTML = resultado; // Exibe o resultado na página
}

//Questão 4 

function CalcularPorcentagem (valor, porcentagem) {
    var acrescimo = valor * (porcentagem / 100); // Calcula o acréscimo da porcentagem
    return valor + acrescimo; // Retorna o valor acrescido da porcentagem
}

function exibirResultado() {
    var valor = parseFloat(document.getElementById("valor").value); // Obtém o valor digitado
    var porcentagem = parseFloat(document.getElementById("porcentagem").value); // Obtém a porcentagem digitada

    if (isNaN(valor) || isNaN(porcentagem)) {
        document.getElementById("resultadoporcentagem") // Exibe mensagem de erro
    } else {
        var resultado = CalcularPorcentagem(valor, porcentagem); // Chama a função para calcular o valor acrescido da porcentagem
        document.getElementById("resultadoporcentagem").innerHTML = "O valor com o acréscimo é R$: " + resultado.toFixed(2); // Exibe o resultado formatado
    }
}


//Questão 5

function mudarCor() {
    // Gerar uma cor aleatória em formato hexadecimal
    var corAleatoria = '#' + Math.floor(Math.random()*16777215).toString(16);
    
    // Alterar a cor de fundo da div
    document.getElementById('Div').style.backgroundColor = corAleatoria;
}


//Questão 6


function verificarIdade() {// Função que verifica se o usuário é maior ou menor de idade
    
    var idade1 = parseInt(prompt("Qual é a sua idade?")); // Obtém a idade do usuário

    
    if (isNaN(idade1) || idade1 < 0) {// Verifica se a idade é um número válido
        
    } else {
        
        if (idade1 >= 18) { // Condicional que verifica se o usuário é maior ou menor de idade
            alert("Você é maior de idade.");
        } else {
            alert("Você é menor de idade.");
        }
    }
}


//Questão 7


function verificarNumero() {// verifica se o número é positivo, negativo ou zero

    var numero = parseFloat(prompt("Digite um número:")); // Pede ao usuário para inserir um número

    
    if (isNaN(numero)) {// Verifica se o número é um valor válido
        alert("Por favor, insira um número válido.");
    } else {
        
        if (numero > 0) { // Condicional que verifica se o número é positivo, negativo ou zero
            alert("O número " + numero + " é positivo.");
        } else if (numero < 0) {
            alert("O número " + numero + " é negativo.");
        } else {
            alert("O número é zero.");
        }
    }
}


//Questão 8


function verificarLogin() { 
    
    var usuario = prompt("Digite seu nome de usuário:");     
    var senha = prompt("Digite sua senha:");

    if (usuario === "admin" && senha === "12345") {
        alert("Bem-vindo, " + usuario + "! Você está logado."); 
    } else {
        alert("Erro: Nome de usuário ou senha incorretos."); 
    }
}

//Questão 9

 
 function calcular() {
    var num1 = parseFloat(document.getElementById("numero1").value); 
     var num2 = parseFloat(document.getElementById("numero2").value); 
     var operacao = document.getElementById("operacao").value; 
            
var resultado;

 
     if (operacao === "adição") {
 resultadocalculado = num1 + num2;
     } else if (operacao === "subtração") {
    resultadocalculado = num1 - num2;
     } else if (operacao === "multiplicação") {
    resultadocalculado = num1 * num2;
    } else if (operacao === "divisão") {
     if (num2 !== 0) {
     resultadocalculado = num1 / num2;
     } else {
      alert("Erro: Não é possível dividir por zero.");
      return;
     }
     } else {
      alert("Operação inválida.");
      return;
         }

 
     document.getElementById("resultado").innerHTML = "Resultado: " + resultadocalculado;
        }

     //Questao 10

    function verificarParOuImpar() {
        var numero = parseInt(document.getElementById("numero").value); 

            
     if (isNaN(numero)) {
             return;
     }

            
     if (numero % 2 === 0) {
         document.getElementById("resultadoparouimpar").innerHTML = "O número " + numero + " é PAR!";
     } else {
         document.getElementById("resultadoparouimpar").innerHTML = "O número " + numero + " é ÍMPAR!";
            }
        }

        //Questão 11

        
        
function classificarTriangulo() {
            
    var lado1 = parseFloat(document.getElementById("lado1").value);
    var lado2 = parseFloat(document.getElementById("lado2").value);
    var lado3 = parseFloat(document.getElementById("lado3").value);
            
     if (isNaN(lado1) || isNaN(lado2) || isNaN(lado3)) {
        alert("Por favor, insira valores válidos para os três lados.");
            return;
            }

            
    if (lado1 + lado2 > lado3 && lado1 + lado3 > lado2 && lado2 + lado3 > lado1) {
                
    if (lado1 === lado2 && lado2 === lado3) {
        document.getElementById("resultadolados").innerHTML = "O triângulo é EQUILÁTERO.";
    } else if (lado1 === lado2 || lado2 === lado3 || lado1 === lado3) {
         document.getElementById("resultadolados").innerHTML = "O triângulo é ISÓSCELES.";
    } else {
         document.getElementById("resultadolados").innerHTML = "O triângulo é ESCALENO.";
                }
     } else {
        document.getElementById("resultadolados").innerHTML = "Os valores não formam um triângulo válido.";
            }
        }

