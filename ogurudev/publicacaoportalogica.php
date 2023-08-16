<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Guru Dev</title>
    <link rel="stylesheet" href="css/publicacoes.css">
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

        .botao-download {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .botao-download:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php
        include('includes/header.php');
    ?>
    <br><br><br><br> <br> <br> <br> <br>
    <br>
    <div class="texto_publicacoes"><h1>Porta Lógica</h1></div>
    <center>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/5rhpsVysPDE" frameborder="0" allowfullscreen></iframe>
    </center>
    <div class="conteudo">
        <div class="explicacao">
            <h2>O que são Portas Lógicas?</h2>
            <p>As portas lógicas são dispositivos eletrônicos que realizam operações lógicas em um ou mais sinais de entrada para produzir um sinal de saída. Elas formam a base para a construção de circuitos digitais e são essenciais na área de eletrônica e computação.</p>
            <p>Essas operações lógicas incluem funções como AND, OR, NOT e muitas outras, permitindo que os circuitos digitais processem informações de maneira eficiente e confiável.</p>
        </div>
        <center>
            <a href="link_para_material_de_download.pdf" class="botao-download">Baixar Material</a>
        </center>
</body>
</html>
