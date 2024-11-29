<?php
session_start();

// Verifica se a sessão ou o cookie do usuário já está ativo
if (isset($_SESSION['user_data']) || isset($_COOKIE['user_data'])) {
    header("Location: pagina_inicial.php"); // Redireciona para a página principal se já estiver logado
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
</head>
<body>

    <form action="login_process.php" method="POST">
        <input type="text" name="username" placeholder="Usuário" required><br>
        <input type="password" name="password" placeholder="Senha" required><br>
        <button type="submit">Entrar</button>
    </form>

</body>
</html>