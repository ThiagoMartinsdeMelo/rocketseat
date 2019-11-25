<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Javascript</title>
    </head>
    <body>
        <div id="app">
            <input type="text" name="nome" id="nome" class="nome" />
            <button class="botao">Adicionar</button>
        </div>
        <script>
            // buscar evento
            var inputElement = document.getElementById('nome');
            var inputElementTag = document.getElementsByTagName('input')[0];
            var inputElementClass = document.getElementsByClassName('nome')[0];
            var inputElementQuery = document.querySelector('div#app input');
            var inputElementQuery = document.querySelector('input[name=nome]');
            var inputElementQuery = document.querySelectorAll('input');
            console.log(inputElement);
            console.log(inputElementTag);
            console.log(inputElementClass);
            console.log(inputElementQuery);
            // pegando o valor do input
            var inputElement = document.querySelector('input[name=nome]');
            var btnElement = document.querySelector('button.botao');
            btnElement.onclick = function()
            {
                var text = inputElement.value;
                alert(text);
            }
        </script>
    </body>
</html>