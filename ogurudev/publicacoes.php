<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Guru Dev</title>
    <link rel="stylesheet" href="css/publicacoes.css">
</head>
<body>
    <?php
        include('includes/header.php');
        include('includes/conexao.php');
    ?>
    <br><br><br><br> <br> <br> <br> <br>
    <br>
    <div class="texto_publicacoes"><center><h1>Publicações</h1></center></div>
    <center>
    <main>
        <?php 
            // Consulta SQL para buscar os dados da tabela "publicacoes"
        $sql = "SELECT * FROM publicacoes";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
    ?>
                <article class="card">
                    <img src="uploads/<?php echo $row['logo']; ?>" alt="<?php echo $row['Titulo']; ?>" width="30%">
                    <h2 class="texto_branco"><?php echo $row['Titulo']; ?></h2>
                    <p class="texto_branco"><?php echo $row['descricao']; ?></p>
                    <div class="card-buttons">
                        <a href="publicacao.php?id=<?php echo $row['idPublicacao']; ?>" class="card-button">Ver Conteúdo</a>
                    </div>
                </article>
    <?php
            }
        } else {
            echo "Nenhum resultado encontrado.";
        }

        $conn->close();
    ?>

            ?>
    </main>
    </center>
</body>
</html>
