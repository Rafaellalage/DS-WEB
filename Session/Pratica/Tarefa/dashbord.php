<?php
    session_start();  //Inicia a sessão, permite que vc armazene e recupere variáveis de sessão.
    
    $loginCerto = 'Rafa'; // Define o valor correto para o login (o usuario).
    $senhaCerto = '123'; //Define o valor correto para a senha.


// Verifica e o formulario foi enviado e se a variável 'login' foi preenchida (indicando que o formulario foi enviado).
    if (isset($_POST['login'])){ 



        //Verifica se o login e senha digitados pelo usuário são iguais aos valores  predefinidos.
        if($loginCerto == $_POST['login'] and $senhaCerto == $_POST['senha']){

        // S e as credenciais estiverem corretas, salva essas informaçoes na sessão .
         $_SESSION['login'] = $_POST['login']; // Salva o login na variável de sessão.
         $_SESSION['senha'] = $_POST['senha']; // Salva a senha na variável de sessão.
        }
    }   

    // Verifica se as variáveis de sessão de login e senha estão definidas (ou seja, o usuário esta autenticado).
    if (isset($_SESSION['login']) and isset ($_SESSION['senha'])){
    
    // S e o usuário estiver autenticad, ele exibe o login e a senha digitados no formulário.
    echo '<br>';
    echo $_POST['login']; // exibe o login digitado.
    echo '<br>';
    echo $_POST['senha']; // exibe a senha digitada.

    }else{

        // Se o usuário não estiver autenticado, ele é redirecionado para a página (index.php).
        header('Location: index.php');
    }

?>