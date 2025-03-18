<?php
// Inicializa as variáveis de erro
$erroNome = $erroCodigo = $erroEstoque = $erroPreco = "";

// Função para limpar os dados de entrada
function limpaEntrada($dado) {
    $dado = trim($dado);   // Remove espaços extras
    $dado = stripslashes($dado); // Remove barras invertidas
    $dado = htmlspecialchars($dado); // Converte caracteres especiais
    return $dado;
}

function validaCliente($nome, $codigo, $estoque, $preco) {
    
    // Validação do Nome
    if (empty($nome)) {
        $erroNome = "O nome é obrigatório";
    } else {
        $nome = limpaEntrada($nome);
        if (strlen($nome) < 3) {
            $erroNome = "O campo precisa possuir no minimo 3 caracteres";
        }
    }

    // Validação do Código
    if (empty($codigo)) {
        $erroCodigo = "O código é obrigatorio";
    } else {
        $codigo = limpaEntrada($codigo);
        if (!filter_var($codigo, FILTER_VALIDATE_EMAIL)) {
            $erroEmail = "Formato do código inválido";
        }
    }

    // Validação do Estoque
    if (!empty($estoque)) {
        $estoque = limpaEntrada($estoque);
        if (strlen($estoque) > 1000) {
            $erroEstoque = "O campo não pode possuir mais do que 1000 caracteres";
        }
    }

    // Se tudo estiver correto, processa os dados
    if (empty($erroNome) && empty($erroCodigo) && empty($erroEstoque)) {
        echo "Dados validados com sucesso!";
        // Aqui você pode inserir os dados no banco de dados ou realizar outra ação
        return true;
    }else{
        session_start();
        $_SESSION['erroNome'] = $erroNome;
        $_SESSION['erroCodigo'] = $erroCodigo;
        $_SESSION['erroEstoque'] = $erroEstoque;
        return false;
    }
}
?>