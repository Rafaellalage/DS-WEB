<?php
    //Começa inclusão no banco de dados
    $stmt = $db->prepare("INSERT INTO vendas(id) VALUES(:cliente)");
    $stmt->bindParam(':cliente', $dados['cliente']['idCliente']);
    $stmt->execute();

    $idVenda = $db->lastInsertId();//Ultimo ID


    $produtos = $data['produtos'];
    foreach ($produtos as  $produto) {
        $stmt = $db->prepare("INSERT INTO produtosvendidos(idVenda, idProduto, preco, quantidade) VALUES(:idVenda, :idProduto, :precoProduto, :quantidade)");
        $stmt->bindParam(':idVenda', $idVenda);
        $stmt->bindParam(':idProduto', $produto['id']);
        $stmt->bindParam(':precoProduto', $produto['preco']);
        $stmt->bindParam(':quantidade', $produto['quantidade']);
        $stmt->execute();
        echo "Produto ID: {$produto['id']}, Nome: {$produto['nome']}, Quantidade: {$produto['quantidade']}\n";
    }

?>