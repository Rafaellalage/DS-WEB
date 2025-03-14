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
        <?php


        if($_SERVER['REQUEST_METHOD'] !='GET' OR !isset($_GET['id'])){
            header("Location: Cliente.php");
        }
        include 'conexao.php';
        $id= $_GET['id'];

        $stmt = $db->prepare("SELECT * FROM clientes WHERE id = :id");
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $dados = $stmt->fetch(PDO::FETCH_ASSOC); //Todos os registros retornados
        
            $idCliente = $dados['id'];
            $nomeCliente = $dados['nome'];
            $emailCliente = $dados['email'];
            $observacaoCliente = $dados['observacao'];
        
    ?>
        <div class="formulario">
            <form action="clienteUpdate.php ?id=<?=$idCliente;?>" method="POST" name = "formulario" onsubmit="return validarDadosCliente()">
                <label for="nome"> Nome: </label>
                <input type ="text" name="nome" id="nome" value="<?= $nomeCliente;?>">
                <p class="erro-input" id = "erro-nome"></p>
                <br>

                <label for="email"> E-mail:</label>
                <input type ="type" name="email" id="email" value="<?= $emailCliente;?>">
                <p class="erro-input" id = "erro-email"></p>
                <br>
                
                <label for="observacao">Observação do Cliente:</label>
                <textarea name ="observacao" cols ="30" rows="4"  id="observacao" value="<?= $observacaoCliente;?>"></textarea>
                <p class="erro-input" id = "erro-observacao"></p>
                <input type="Submit">
    </form>
</div>

<div> 
    <h2> Consulta Clientes</h2>
<table id ="Clientes">
    <tr> 
        <th> Nome</th>
        <th> E-mail</th>
        <th> Observacao</th>
        <th> Editar</th>
        <th> Excluir</th>
    </tr>

 
 
<i class="fa-solid fa-pencil"></i>
    
</table> 

    </div>
</body>
<script src="./assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/d7f9993753.js" crossorigin="anonymous"></script>
</html>