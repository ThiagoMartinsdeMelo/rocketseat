<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Javascript</title>
    </head>
    <body>
        <script>
            function temHabilidade(skills){
                if (skills.indexOf('Javascript') > -1) {
                    return true;
                }
                return false;
            }
            var skills = ['Javascript', 'ReactJS', 'React Native'];
            console.log(temHabilidade(skills));
        </script>
    </body>
</html>