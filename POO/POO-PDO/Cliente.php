<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business System - Cliente</title>
    <link rel="shortcut icon" type="imagex/png" href=" ./assets/img/ico.svg">
    <link rel = "stylesheet" href="./assets/style/style.css">
</head>
<body>

<div class = "menu">
<ul>
        <li><a href="index.php" class="meumenu" title="Home">Home</a></li>
        <li><a href="Cliente.php" class="meumenu  meumenu-active" title="Clientes">Clients </a></li>
        <li><a href="#" class="meumenu" title="Produtos">Products </a></li>
        <li><a href="#" class="meumenu" title="Vendas">Sales </a></li>
</ul>
</div>
<hr>

    <div class="container">
        <hr>
        <div class="formulario">
            <form action="insertion.php" method="POST" name = "formulario" onsubmit="return validarDadosCliente()">
                <label for="nome"> Nome: </label>
                <input type ="text" name="nome" id="nome">
                <p class="erro-input" id = "erro-nome"></p>
                <br>
                <label for="email"> E-mail:</label>
                <input type ="type" name="email" id="email">
                <p class="erro-input" id = "erro-email"></p>
                <br>
                <label for="observacao">Observação do Cliente:</label>
                <textarea name ="observacao" cols ="30" rows="4"  id="observacao"></textarea>
                <p class="erro-input" id = "erro-observacao"></p>
                <input type="Submit">
</div>


<table id ="Clientes">
    <tr> 
        <th> Nome</th>
        <th> E-mail</th>
        <th> Observacao</th>
        <th> Editar</th>
        <th> Excluir</th>
    </tr>

 
 <?php
        include 'conexao.php';

        echo "<h2> Resultado: </h2>";
        $dados = $db->query("SELECT * FROM clientes");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC);
        foreach($todos as $linha){
            $idCliente = $linha['id'];
            $nomeCliente = $linha['nome'];
            $emailCliente = $linha['email'];
            $observacaoCliente = $linha ['observacao'];

            echo "
            <tr>
                <td> $nomeCliente</td>
                <td>  $emailCliente</td>
                <td>  $observacaoCliente</td>
                <td> <a href='clienteAlteracao.php?id=$idCliente'> <i class='fa-solid fa-pencil'></i></a></td>
                <td> <a href='delete.php?id=$idCliente'><i class='fa-solid fa-trash'></i></a> </td>

                </tr>
                ";
        }
    ?>
<i class="fa-solid fa-pencil"></i>
    
</table> 
<h3><a href="#"> Link de teste</a></h3> 
    </div>
</body>
<script src="./assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/d7f9993753.js" crossorigin="anonymous"></script>
</html>