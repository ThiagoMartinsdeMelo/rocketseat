<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Javascript</title>
    </head>
    <body>
        <script>
            function exibeUsuarios(usuarios) {
                let  nome;
                let habilidades;
                for (let value of usuarios) {
                    nome = value.nome;
                    habilidades = value.habilidades.join();
                    console.log('O '+nome+' possui as habilidades '+habilidades);
                }
            }
            var usuarios = [
                {
                    nome: 'Diego',
                    habilidades: ['Javascript', 'ReactJS', 'Redux']
                },
                {
                    nome: 'Gabriel',
                    habilidades: ['VueJS', 'Ruby on Rails', 'Elixir']
                }
            ]
            console.log(exibeUsuarios(usuarios));
        </script>
    </body>
</html>