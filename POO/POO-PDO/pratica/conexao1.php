<?php


//MySQL
$db = new PDO("mysql:host=localhost;dbname=pdo", "root", "");



if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o formulário foi enviado
    
    $nome = $_POST['nome'];// Pega os dados do formulário
    $email = $_POST['email'];
}

 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Dados Enviados:</h3>";
    echo "<p>Nome: " .($nome) . "</p>";
    echo "<p>E-mail: " . ($email) . "</p>";
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Nome e E-mail</title>
</head>
<body>


    

    <!-- Formulário para o usuário preencher -->
    <form method="POST" action="conexao1.php">
    <h2>Formulário</h2>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>
        <bixinput type="submit" value="Enviar">
        <br><input type = "submit" value = "Enviar">
    </form>




<style>
label, input, select, textarea{
    display:block ;
    width:95%;
    padding:10px;
    margin-bottom:20px;
}

form{
    width: 550px;
    margin:auto;
    background:gray;
    padding: 40px;
}
label{
    padding:0;
    margin:0;
    width:100%
}
.emlinha{
    display:inline;
    width:4%;
}
.medidas{
    display: inline;
    width:50%;
}
.botao{
    background:green;
}
    </style>


</body>
</html>