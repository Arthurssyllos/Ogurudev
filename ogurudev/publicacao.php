<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Guru Dev</title>
    <link rel="stylesheet" href="css/publicacoes.css">
    <link rel="stylesheet" href="css/botaodownload.css">
    <style>
        .texto_publicacoes {
            color: white;
            padding: 10px;
            color: white;
            text-align: center;
        }

        .conteudo {
            color: white;
            margin: 50px auto;
            max-width: 800px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
        }

        .explicacao {
            margin-bottom: 20px;
        }

        .explicacao h2 {
            font-size: 24px;
        }

        .explicacao p {
            font-size: 18px;
            line-height: 1.6;
        }

    </style>
</head>
<body>
<?php
        include('includes/header.php');
        include('includes/conexao.php');
    ?>
    <br><br><br><br> <br> <br> <br> <br>
    <br>
<?php
    // Obter o ID do link passado na URL (supondo que seja um parâmetro chamado "id")
        $content_id = $_GET['id'];

        // Consulta SQL para buscar os dados do conteúdo com base no ID
        $sql = "SELECT * FROM publicacoes WHERE idPublicacao = $content_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
    ?>
            <div class="texto_publicacoes"><h1><?php echo $row['Titulo']; ?></h1></div>
            <div class="conteudo">
                <div class="explicacao">
                    <!--
                        <center>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/5rhpsVysPDE" frameborder="0" allowfullscreen></iframe>
    </center>

        -->             
                    <p><?php echo $row['explicacao']; ?></p>
                    <?php if ($row['conteudo']){
                        ?>
                        <center>
                        <a href="uploads/<?php echo $row['conteudo']; ?>" class="button">
                            <span class="button__text">Material</span>
                            <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35" id="bdd05811-e15d-428c-bb53-8661459f9307" data-name="Layer 2" class="svg"><path d="M17.5,22.131a1.249,1.249,0,0,1-1.25-1.25V2.187a1.25,1.25,0,0,1,2.5,0V20.881A1.25,1.25,0,0,1,17.5,22.131Z"></path><path d="M17.5,22.693a3.189,3.189,0,0,1-2.262-.936L8.487,15.006a1.249,1.249,0,0,1,1.767-1.767l6.751,6.751a.7.7,0,0,0,.99,0l6.751-6.751a1.25,1.25,0,0,1,1.768,1.767l-6.752,6.751A3.191,3.191,0,0,1,17.5,22.693Z"></path><path d="M31.436,34.063H3.564A3.318,3.318,0,0,1,.25,30.749V22.011a1.25,1.25,0,0,1,2.5,0v8.738a.815.815,0,0,0,.814.814H31.436a.815.815,0,0,0,.814-.814V22.011a1.25,1.25,0,1,1,2.5,0v8.738A3.318,3.318,0,0,1,31.436,34.063Z"></path></svg></span></a>
                    </center>
                    <?php
                    }
                    ?>
                </div>
            </div>  
    <?php
        } else {
            echo "Conteúdo não encontrado.";
        }

        $conn->close();
    ?>
    <!-- Restante do corpo do documento -->
</body>
</html>