<?php

if($_SERVE['REQUEST_METHOD'] != 'POST'){
    echo " <script>alert('Esta faltando o metodo POST')
    window.location.href = 'Cliente.php';
    </script>";
    //header("Location: index.php"); Redirecionamento com PHP
   
   
}

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $observacao = $_POST['observacao'];
    $id =$_GET['id'];

    var_dump($_POST);

    include 'conexao.php';

    
        $statement = $db->prepare("UPDATE clientes SET nome = :nome, email = :email, observacao= :observacao WHERE id = :id");
        $statement -> bindParam (':nome', $nome);
        $statement -> bindParam (':email', $email);
        $statement -> bindParam (':observacao', $observacao);
        $statement->bindParam(':id', $id);
        $statement ->execute();

         header("Location: Cliente.php"); //Redirecionamento com PHP
?>