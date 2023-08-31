<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Guru Dev</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

    <?php
        include('includes/header.php');
    ?>
    
    
    <br><br><br><br><br><br><br>
    <div class="container">
        <div class="left">
            <div class="logo"><div class='console-container'><span id='text'></span><div class='console-underscore' id='console'>&#95;</div></div></div>
            <div class="box-btn">
                <input class="button" type="button" value="Saiba mais">
            </form>
        </div>
        </div>
        <div class="right">
            <div class="image-container">
                <img class="image" src="img/img1.jpg" alt="Imagem">
            </div>
        </div>
    </div>
    <center>
        <div class="container2">
            <div class="left2">
                <div class="text2"><q><h2>O <span class="highlight-text">Gurudev</span> é uma startup <br>que busca mudar a maneira<br> de conectar as pessoas.</h2></q><br></div>
            </div>
        </div>
    </center>

    <br><br><br><br><br><br><br><br><br><br><br><br>

    <?php
        include('includes/footer.php');
    ?>


    <script>
            // function([string1, string2],target id,[color1,color2])    
        consoleText(['Sempre<br>Conectado.', 'É estar sempre informado', 'E sempre<br>atualizado.'], 'text',['tomato','rebeccapurple','lightblue']);

        function consoleText(words, id, colors) {
        if (colors === undefined) colors = ['#fff'];
        var visible = true;
        var con = document.getElementById('console');
        var letterCount = 1;
        var x = 1;
        var waiting = false;
        var target = document.getElementById(id)
        target.setAttribute('style', 'color:' + colors)
        window.setInterval(function() {

            if (letterCount === 0 && waiting === false) {
            waiting = true;
            target.innerHTML = words[0].substring(0, letterCount)
            window.setTimeout(function() {
                var usedColor = colors.shift();
                colors.push(usedColor);
                var usedWord = words.shift();
                words.push(usedWord);
                x = 1;
                target.setAttribute('style', 'color:' + colors)
                letterCount += x;
                waiting = false;
            }, 1000)
            } else if (letterCount === words[0].length + 1 && waiting === false) {
            waiting = true;
            window.setTimeout(function() {
                x = -1;
                letterCount += x;
                waiting = false;
            }, 1000)
            } else if (waiting === false) {
            target.innerHTML = words[0].substring(0, letterCount)
            letterCount += x;
            }
        }, 120)
        window.setInterval(function() {
            if (visible === true) {
            con.className = 'console-underscore hidden'
            visible = false;

            } else {
            con.className = 'console-underscore'

            visible = true;
            }
        }, 400)
        }
    </script>



</body>
</html>
