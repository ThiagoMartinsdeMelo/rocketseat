<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Javascript</title>
    </head>
    <body>
        <script>
            function pares(x, y)
            {
                var arr_pares = [];
                while (x <= y) {
                    if (x % 2 === 0) {
                        arr_pares.push(x);
                    }
                    x++;
                }
                return arr_pares;
            }
            var numeros = pares(32, 321);
            console.log(numeros);
        </script>
    </body>
</html>