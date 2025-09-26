<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="login-page">
        <div class="form">
            <h2>Login</h2>
            <form class="login-form" action="autenticacao.php" method="POST">
                <label for="login">Login:</label>
                <input type="text" id="login" name="login" placeholder="login" required>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="senha" required>

                <button type="submit">Login</button>
                <p class="message">Não foi cadastrado? <a href="#">Criar a conta</a></p>
            </form>
        </div>
    </div>
</body>
</html> 
