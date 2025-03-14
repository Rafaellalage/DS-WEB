<?php


    //MySQL
    $db = new PDO("mysql:host=localhost;dbname=pdo", "root", ""); // Conectando com o banco

    //var_dump($db);
    //echo "<br><br>";
    //print_r($db);
    
    //$dados = $db-> query("SELECT * FROM clientes");
    //$todos = $dados -> fetch(PDO::FETCH_ASSOC); //Todos os registros retornados 
    //print_r($todos);
    //echo "<br>";
    //echo $todos['email'];

    

    //echo "<h2> Exemplo de consulta com muitas linhas </h2>";
    //$dados = $db->query("SELECT * FROM clientes");
    //$todos = $dados->fetchAll(PDO::FETCH_ASSOC);
    //foreach($todos as $linha){
        //echo "Linha: ". $linha ['id'];
        //echo "Nome: ".$linha['nome'];
        //echo "E-mail: ".$linha['email'];
    //}
   // echo"<br>";

   // echo "<h2> Inserindo dados </h2>";

    //$statement = $db->prepare ("INSERT INTO clientes (nome, email) VALUES (?, ?)");

    //$statement->execute(array("Attina", "attina@gmail.com"));
    //$statement-> execute(array("Scudeler", "scudeler@gmail.com"));
    //$statement->execute(array("Tom Mate", "tommate@gmail.com"));
    //echo"<br>";

    //echo "<h2> Exemplo de consulta com muitas linhas </h2>";
    //$dados = $db->query("SELECT * FROM clientes");
    //$todos = $dados->fetchAll(PDO::FETCH_ASSOC);
   // foreach($todos as $linha){
        //echo "Linha: ". $linha ['id'];
        //echo "Nome: ".$linha['nome'];
        //echo "E-mail: ".$linha['email'];
       // echo"<br>";
    
   // }

    //echo "<h2>Inserindo dados</h2>";
   // $statement = $db->prepare("INSERT INTO clientes (nome, email) VALUES (?, ?)");
    //$nome = "Carol";
    //$email = "carol@gmail.com";

    //$statement->execute(array($nome, $email));
?>