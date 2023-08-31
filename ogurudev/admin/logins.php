<?php
session_start();
include('../includes/conexao.php');

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Limpa os dados do formulário para prevenir SQL injection
    $email = $conn->real_escape_string($_POST["email"]);
    $senha = $conn->real_escape_string(md5($_POST["senha"]));

    // Consulta SQL para verificar as credenciais
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login bem-sucedido
        $row = $result->fetch_assoc();
        $_SESSION["user_id"] = $row["id"];
        header("Location: dashboard.php");
    } else {
        // Login falhou
        $error_message = "Login ou senha Errada!!.";
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página de Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error_message)) { echo "<p>$error_message</p>"; } ?>
    <form method="post" action="">
        <label for="email">E-mail:</label>
        <input type="email" name="email" required><br>
        <label for="senha">Senha:</label>
        <input type="senha" name="senha" required><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
