<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Javascript</title>
    </head>
    <body>
        <script>
            function exibeAlgo()
            {
                console.log('Hi');
            }
            // executa a cada 1 segundo
            setInterval(exibeAlgo, 1000);
            // executa apenas 1 vez, com um delay, nesse caso apos 5 segundos
            setTimeout(exibeAlgo, 5000);
        </script>
    </body>
</html>