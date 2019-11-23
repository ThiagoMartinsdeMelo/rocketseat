<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Javascript</title>
    </head>
    <body>
        <div id="app">
            <button class="botao">Adicionar</button>
            <br/>
            <div id="squares"></div>
        </div>
        <script>
            /*
            * 2º exercícioUtilizando o resultado do primeiro desafio, 
            * toda vez que o usuário passar o mouse por cima dealgum quadrado 
            * troque sua cor para uma cor aleatória gerada pela função abaixo:
            */
            function getRandomColor()
            {
                var letters = "0123456789ABCDEF";
                var color = "#";
                for (var i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            }
            var btnElement = document.querySelector('button.botao');
            var squaresDiv = document.getElementById('squares');
            btnElement.onclick = function()
            {
                // cria uma div dentro do elemento square
                var square = document.createElement('div');
                square.style.height = 100;
                square.style.width = 100;
                square.style.backgroundColor = '#f00';
                square.style.marginTop = '2px';
                square.onmouseover = function() {
                    square.style.backgroundColor = getRandomColor();
                }
                squaresDiv.appendChild(square);
            }
        </script>
    </body>
</html>