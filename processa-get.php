<?php
//processa-get.php

/*Array super global
$SERVER
$GET - CHAMADO DESSA FORMA PORQUE É UMA MATRIZ JÁ CRIADA PELO PHP QUE PODE SER ACESSADO DE DIVERSAS FORMAS - ESCOPO ABERTO*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento GET</title>
    <style>
        ul {
            list-style: none;
        }
    </style>
</head>
<body>
    <h1>Processamento de dados usando GET</h1>

    <?php
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $mensagem = $_GET["mensagem"];

?>

<h1>Dados:</h1>
<ul>
    <li>Nome: <?=$nome?></li>
    <li>E-mail: <?=$email?></li>
    <li>Mensagem: <?=$mensagem?></li>
</ul>


    
</body>
</html>