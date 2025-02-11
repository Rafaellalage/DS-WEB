var Capital= Number.parseInt(prompt("Digite o Capital Inicial:"))
var Tempo= Number.parseInt(prompt("Digite o Tempo em meses:"))
var Juros= Number.parseInt(prompt("Digite a Taxa de juros em porcentagem :"))


    var resultado = alert( Capital * ( 1 + (Juros/100) ** Tempo ))
    
    alert (resultado.toFixed(2))
    