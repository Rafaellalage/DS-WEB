<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="shortcut icon" type="imagex/png"href="./assets/img/ico.svg">
    <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>

<div class="menu">
<ul>
       
        <li><a href="index.php" class="meumenu" title="Home">Home</a></li>
        <li><a href="cliente.php" class="meumenu" title="Clients">Clientes </a></li>
        <li><a href="produto.php" class="meumenu meumenu-active" title="Products">Produtos </a></li>
        <li><a href="vendas.php" class="meumenu" title="Sales">Vendas </a></li>

    </ul>
</div>

    <div class ="container">  <!-- para criar um divisão, guardar tudo junto e facilitar o css-->
    <hr> <!--linha embaixo-->
        <div class="formulario">
            <form action="insertionProduto.php" method="POST" name="formulario" onsubmit="return validarDadosClientes()">
                <h1>CADASTRO PRODUTOS:</h1>
                <label for="nome">Nome do Produto: </label>
                <input type="text" name="nome" id="nome">
                <p class="erro-input" id="erro-nome"></p>


                <label for="codigo">Codigo de produto: </label>
                <input type="" name="codigo" id="codigo">
                <p class="erro-input" id="erro-codigo"></p>


                <label for="estoque">Estoque:</label>
                <input type="number" name="estoque" id="estoque">
                <p class="erro-input" id="erro-estoque"></p>
                

                <label for="preco">Preço:</label>
                <input type="number" name="preco" id="preco">
                <p class="erro-input" id="erro-preco"></p>
                


                <input type="Submit" >
            </form>
        </div>


<table id="clientes">
    <tr>
       <th>Nome:</th><!--titulo da tabela-->
       <th>Codigo:</th>
       <th>Estoque:</th>
       <th>Preço:</th>
       <th>Editar</th>
       <th>Excluir</th>
    </tr>



    <?php
        include 'conexao.php';

        echo "<a href";
        
        echo  "<br><br><br><br>";
        $dados  = $db->query("SELECT * FROM produtos");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC);//Todos os registros retornados

        foreach($todos as $linhas ){

            $idCliente = $linhas['id'];
            $nomeProduto = $linhas['nome'];
            $codigoProduto = $linhas['codigo'];
            $estoqueProduto = $linhas['estoque'];
            $precoProduto = $linhas['preco'];


            /*td= dados da tabela*/
            echo"
                <tr>
                    <td>$nomeProduto</td>
                    <td>$codigoProduto</td>
                    <td>$estoqueProduto</td>
                    <td>$precoProduto</td>
                    <td> <a class= 'link-alteracao' href='produtoAlteracao.php?id=$idCliente'><i class='fa-solid fa-pencil'></i></a> </td>
                    <td> <a class= 'link-exclusao' href='deleteProduto.php?id=$idCliente'><i class='fa-solid fa-trash'></i></a> </td>
                </tr>
            ";
    
        }

?>
</table>
</div>
<script src="./assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/b1a26aa984.js" crossorigin="anonymous"></script>
</body>
</html>
    