<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Javascript</title>
    </head>
    <body>
        <script>
            function exibeEndereco()
            {
                return 'O usuario mora em '+endereco.cidade+' / '+endereco.uf+
                        ' no bairro '+endereco.bairro+', na rua "'+endereco.rua+'" com n. 1293.';
            }
            var endereco = {
                        rua: "Rua dos Pinheiros",
                        numero: 1293,
                        bairro: "Centro",
                        cidade: "Sao Paulo",
                        uf: "SP"
                    }
            console.log(exibeEndereco(endereco));
            
        </script>
    </body>
</html>