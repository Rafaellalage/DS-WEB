<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business System </title>
    <link rel="shortcut icon" type="imagex/png" href=" ./assets/img/ico.svg">
    <link rel = "stylesheet" href="./assets/style/style.css">
</head>
<body>

<div class = "menu">
    <ul>
        <li><a href="#" class="meumenu  meumenu-active" me title="Home">Home</a></li>
        <li><a href="Cliente.php" class="meumenu"  title="Clientes">Clientes </a></li>
        <li><a href="#" class="meumenu" title="Produtos">Produtos </a></li>
        <li><a href="#" class="meumenu" title="Vendas">Vendas </a></li>
    </ul>
</div>

    <div class="container">
<hr>
        <h1> Dashboard</h1>
        <p>Os gráficos e exibições de informações encontram-se em desenvolvimento, os unicos dados encontrados foram:</p>

    <?php
        include 'conexao.php';

        $dados = $db->query("SELECT * FROM clientes");
        echo  "Quantidade de clientes cadastrados:" . $dados->rowCount();
    ?>
    </div>

    
</body>
<script src="./assets/js/script.js"></script>
</html>