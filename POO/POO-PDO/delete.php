<?php

$id = $_GET['id'];

include "conexao.php";

$id = 5;
$stmt = $db->prepare("DELETE FROM clientes WHERE id = :id");
$stmt-> bindParam(':id', $id);
$stmt->execute();
if ($stmt-> rowCount() > 0){
    echo "Deletou". $stmt->rowCount(). "linhas";
}else{
    echo "Não deletou nenhuma linha";
}

header("Location: Cliente.php");
?>