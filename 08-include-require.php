 <!-- Fazendo a inclusão de um arquivo de programação -->
 <?php require "recursos.php"?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de Recursos</title>
</head>
<body>
    <h1>Inclusão de Recursos</h1>
    <hr>

    <h2><?=ESCOLA?></h2>
    <p>Estamos fazendo o curso de <?=$curso?></p>
    <ul>
        <?php foreach($tecnologias as $tecnologia) {?>
            <li><?=$tecnologia?></li>
        <?php } ?>
    </ul>
    <p>O aluno Chapolin Colorado tem 25 anos e é <?=verificaIdade(25)?> de idade.</p>

    <article>
        <h2>Conteúdo qualquer</h2>
        <?php include "textos.php"?>
    </article>

    <!-- require - em casos de erros, o require para toda a página. Utilizamos o require quando é necessário trazer informações essenciais, como uma conexão com o banco de dados. O incluide é mais permissivo, caso haja algum erro, ele ainda executa parcialmente a página. Na dúvida, utilize sempre o require, pois é mais seguro e possui a particularidade citadaa -->
</body>
</html>