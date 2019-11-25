<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Javascript</title>
    </head>
    <body>
        <div id="app">
            <input id="nome" />
        </div>
        <script>
            var linkElement = document.createElement('a');
            linkElement.setAttribute('href', 'https://rocketseat.com.br/');
            linkElement.setAttribute('title', 'Site da Rocketseat');
            linkElement.setAttribute('target', '_blank');
            var textElement = document.createTextNode('Acessar site da Rocketseat');
            linkElement.appendChild(textElement);
            var containerElement = document.querySelector('#app');
            containerElement.appendChild(linkElement);
            var inputElement = document.querySelector('#nome');
            containerElement.removeChild(inputElement);
        </script>
    </body>
</html>