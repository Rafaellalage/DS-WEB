//Função para Validação dos dados do Cliente
function validarDadosCliente(){
    
   
    if(formulario.nome.value.length <3 || formulario.nome.value == ""){
        formulario.nome.focus();
        document.getElementById('erro-nome'). innerHTML = "Preencha o campo email corretamente!";
        document.getElementById('erro-email'). innerHTML = ""
        document.getElementById('erro-observacao'). innerHTML = ""
        return false;
    }

    if(formulario.email.value == "" || formulario.email.value.indexOf('@') == -1 || 
        formulario.email.value.indexOf('.') == -1){
        formulario.nome.focus();
        document.getElementById('erro-nome'). innerHTML = ""
        document.getElementById('erro-email'). innerHTML = "Preencha o campo email corretamente!";
        document.getElementById('erro-observacao'). innerHTML = ""
        }
    if (formulario.observacao.value.length > 1000){
        formulario.nome.focus();
        document.getElementById('erro-nome'). innerHTML = ""
        document.getElementById('erro-observacao'). innerHTML = "Exerceu a capacidade de 1000 caracteres!<br> No momento possui" 
         +formaulario.observacao.value.length ;
         document.getElementById('erro-email'). innerHTML = ""
        return false;
    }
    
}