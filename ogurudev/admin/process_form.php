<?php
include('../includes/conexao.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titulo = isset($_POST["titulo"]) ? htmlspecialchars($_POST["titulo"]) : "";
    $descricao = isset($_POST["descricao"]) ? htmlspecialchars($_POST["descricao"]) : "";
    $explicacao = isset($_POST["explicacao"]) ? htmlspecialchars($_POST["explicacao"]) : "";
    $youtubeLink = isset($_POST["youtube_link"]) ? filter_var($_POST["youtube_link"], FILTER_VALIDATE_URL) : "";
    $IdUsuario = isset($_POST["idUsuario"]) ? intval($_POST["idUsuario"]) : "";

    $uploadDir = "../uploads/";

    $uploadFile = uniqid() . '_' . basename($_FILES["arquivo"]["name"]);
    move_uploaded_file($_FILES["arquivo"]["tmp_name"], $uploadDir . $uploadFile);

    $logoFile = uniqid() . '_' . basename($_FILES["logo"]["name"]);
    move_uploaded_file($_FILES["logo"]["tmp_name"], $uploadDir . $logoFile);

    
    // Utilização de prepared statement para evitar SQL injection
    $stmt = $conn->prepare("INSERT INTO publicacoes (Titulo, descricao, explicacao, video, logo, conteudo, dataPublicado, idUsuario) 
                            VALUES (?, ?, ?, ?, ?, ?, NOW(), ?)");
    $stmt->bind_param("sssssss", $titulo, $descricao, $explicacao, $youtubeLink, $logoFile, $uploadFile, $IdUsuario);

    if ($stmt->execute()) {
        echo "Dados inseridos com sucesso!";
        echo $IdUsuario;
    } else {
        echo "Erro ao inserir dados.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Ocorreu um erro ao processar o formulário.";
}
?>
