<?php

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    echo " <script>alert('Esta faltando o metodo POST')
    window.location.href = 'Cliente.php';
    </script>";
    //header("Location: index.php"); Redirecionamento com PHP
   
   
}

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $observacao = $_POST['observacao'];

    var_dump($_POST);

    include 'conexao.php';

    echo "<h2>Inserindo dados</h2>";
        $statement = $db->prepare("INSERT INTO clientes (nome, email, observacao) VALUES (:nome, :email, :observacao)");
        $statement -> bindParam (':nome', $nome);
        $statement -> bindParam (':email', $email);
        $statement -> bindParam (':observacao', $observacao);
        $statement ->execute();

         header("Location: Cliente.php"); //Redirecionamento com PHP
?>
