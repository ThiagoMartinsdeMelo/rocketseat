<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Javascript</title>
    </head>
    <body>
        <div id="app">
            <button class="botao">Adicionar</button>
            <br/>
            <div class="box">
                <canvas width="120" height="60"></canvas>
            </div>
        </div>
        <script>
            function desenhaQuadrado()
            {
                var canvas = document.querySelector('canvas');
                var context = canvas.getContext('2d');
                context.fillStyle = 'red';
                context.fillRect(10, 10, 50, 50);
            }
            var btnElement = document.querySelector('button.botao');
            btnElement.onclick = function()
            {
                desenhaQuadrado();
            }
        </script>
    </body>
</html>