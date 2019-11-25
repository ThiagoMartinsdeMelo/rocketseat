<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Javascript</title>
    </head>
    <body>
        <script>
            function experiencia(anos) {
                if ((anos => 0) && (anos < 1)) {
                        return 'Iniciante';
                } else if ((anos >= 1) && (anos < 3)) {
                        return 'Intermediario';
                } else if ((anos >= 3) && (anos <= 6)) {
                        return 'Acançado';
                } else if (anos >= 7) {
                        return 'Jedi Master';
                }
            }
            var anosEstudo = 7;
            console.log(experiencia(anosEstudo));
        </script>
    </body>
</html>