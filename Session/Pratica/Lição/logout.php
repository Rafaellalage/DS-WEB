<?php

// Iniciar a sessão
session_start();

// Limpar todas as variáveis da sessão
session_unset();

// Destruir a sessão
session_destroy();

// Apagar o cookie de dados do usuário
setcookie('user_data', '', time() - 3600, '/'); // Definindo o tempo do cookie para expirar no passado

// Redirecionar para a página de login
header("Location: login.php");
exit();

// Se a sessão ou cookie do usuário estiverem definidos, exiba o botão de logout
if (isset($_SESSION['user_data']) || isset($_COOKIE['user_data'])) {
    echo '<button onclick="window.location.href=\'logout.php\'">Logout</button>';
}





