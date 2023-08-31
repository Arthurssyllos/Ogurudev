<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION["user_id"])) {
    header("Location: index.php"); // Redireciona para a página de login se não estiver logado
    exit();
}
?>
