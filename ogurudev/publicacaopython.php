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
    <div class="texto_publicacoes"><h1>Python</h1></div>
    <div class="conteudo">
        <div class="explicacao">
            <h2>O que é Python e oque faz?</h2>
            <p>Python é uma linguagem de programação versátil e de alto nível, amplamente utilizada em uma variedade de domínios, desde desenvolvimento web e científico até automação de tarefas e inteligência artificial. Criada por Guido van Rossum e lançada em 1991, Python se destaca por sua sintaxe clara e legível, o que a torna uma excelente escolha tanto para programadores iniciantes quanto experientes.

Python é conhecida por sua abordagem "batteries-included", o que significa que ela oferece uma vasta biblioteca padrão que abrange uma ampla gama de funcionalidades. Isso permite que os desenvolvedores realizem tarefas complexas com menos esforço, uma vez que muitas funcionalidades já estão disponíveis para uso imediato.

A linguagem suporta programação orientada a objetos, programação funcional e programação procedural, o que a torna flexível para se adaptar a diferentes estilos de codificação. Além disso, Python possui uma comunidade ativa e crescente, o que resulta em uma ampla gama de módulos e pacotes de terceiros disponíveis para resolver problemas específicos.

Devido à sua popularidade e facilidade de uso, o Python é frequentemente escolhido para o desenvolvimento de aplicativos, automação de tarefas, análise de dados, criação de protótipos, desenvolvimento web, aprendizado de máquina e inteligência artificial. Sua natureza acessível e suas capacidades poderosas tornam Python uma escolha poderosa para uma ampla gama de projetos e aplicações.</p>
        </div>
        <center>
            <a href="conteudopython.pptx" class="botao-download">Baixar Material</a>
        </center>

</body>
</html>
