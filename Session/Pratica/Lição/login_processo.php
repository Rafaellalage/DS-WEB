<?php
session_start();

// Dados fictícios para exemplo de login
$usuarios = [
    'admin' => '12345',
    'user' => 'senha123'
];

// Obtenha os dados enviados pelo formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Verifique se o login é válido
if (isset($usuarios[$username]) && $usuarios[$username] === $password) {
    // Cria a sessão
    $_SESSION['user_data'] = ['username' => $username];

    // Cria o cookie
    setcookie('user_data', json_encode(['username' => $username]), time() + (60 * 60 * 24 * 7), '/'); // Cookie expira em 7 dias

    // Redireciona para a página principal
    header("Location: pagina_inicial.PHP");
    exit();
} else {
    echo "Usuário ou senha inválidos.";
}
?>