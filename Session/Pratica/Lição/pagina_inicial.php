<?php
session_start();

// Verificar se o usuário está logado, seja por sessão ou cookie
if (!isset($_SESSION['user_data']) && !isset($_COOKIE['user_data'])) {
    header("Location: login_processo.php"); // Se não estiver logado, redireciona para o login
    exit();
}

// Se a sessão estiver ativa, utilize ela
if (isset($_SESSION['user_data'])) {
    $user_data = $_SESSION['user_data'];
} else {
    // Caso o cookie esteja presente, restauramos a sessão
    $user_data = json_decode($_COOKIE['user_data'], true);
    $_SESSION['user_data'] = $user_data; // Armazena os dados no array de sessão
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>

    <h1>Bem-vindo, <?php echo htmlspecialchars($user_data['username']); ?>!</h1>
    <button onclick="window.location.href='pagina_inicial.php' ">Logout</button>

</body>
</html>