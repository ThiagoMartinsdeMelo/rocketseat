<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Javascript</title>
    </head>
    <body>
        <div id="app">
            <button class="botao">Adicionar</button>
            <br/>
            <div class="box" style="width:100px;">
            </div>
        </div>
        <script>
            /*
            * Crie um botão que ao ser clicado cria um novo elemento em tela
            * com a forma de um quadradovermelho com 100px de altura e largura.
            * Sempre que o botão for clicado um novo quadrado deveaparecer na tela.
            */
            function desenhaQuadrado()
            {
                var randomColor = Math.floor(Math.random()*16777215).toString(16);
                var boxElement = document.createElement('canvas');
                boxElement.setAttribute('width', '100');
                boxElement.setAttribute('height', '100');
                boxElement.setAttribute('style', 'background-color:#'+randomColor +';margin-top:2px;');
                var criarElemento = document.querySelector('.box');
                criarElemento.appendChild(boxElement);
            }
            var btnElement = document.querySelector('button.botao');
            btnElement.onclick = function()
            {
                desenhaQuadrado();
            }
        </script>
    </body>
</html>