<?php

include('includes.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Guru Dev</title>
    <link rel="stylesheet" href="../css/menu.css">
</head>
<body>
<?php  

$id_usuario = $_SESSION["user_id"]; 

?>
<style>
  .cont {
    color: white;
    font-size: 35px;
  }
  .container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    margin-top: 50px;
}

form {
    display: grid;
    gap: 15px;
}

label {
    font-weight: bold;
}

input[type="text"],
textarea,
input[type="url"],
input[type="file"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

</style>
    <br><br><br><br><br><br><br><br>
    <center>
    <div class="cont"><div id="counter">0</div> PESSOAS <q>CONECTADAS</q> <span>&#128512</span>
<br><br>Cadastrar Publicação</div>

<div class="container">
<form action="process_form.php" method="post" enctype="multipart/form-data">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required><br>
        <label for="descricao">Breve Descrição:</label>
        <textarea name="descricao" required></textarea><br>

        <label for="explicacao">Explicação:</label>
        <textarea name="explicacao"></textarea><br>

        <label for="youtube_link">Link do YouTube:</label>
        <input type="url" name="youtube_link"><br>

        <label for="arquivo">Upload da logo:</label>
        <input type="file" name="logo"><br>

        <label for="arquivo">Upload do material:</label>
        <input type="file" name="arquivo"><br>

        <input type="hidden" name="idUsuario" value ="<?php echo $id_usuario; ?>"><br>

        <input type="submit" value="Enviar">
    </form>

</div>

    </center>










<script>
  const targetCount = 125; 
  const duration = 3000;  
  const startCount = 0;   

  const counterElement = document.getElementById('counter');

  function animateCount(from, to, duration) {
    const startTime = Date.now();
    const updateInterval = 50;

    function update() {
      const currentTime = Date.now();
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const currentValue = Math.floor(from + (to - from) * progress);

      counterElement.textContent = currentValue;

      if (progress < 1) {
        requestAnimationFrame(update);
      }
    }

    update();
  }

  animateCount(startCount, targetCount, duration);
</script>
</body>
</html> 