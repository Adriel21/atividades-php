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
    <title>Processamento POST</title>
    <style>
        ul {
            list-style: none;
        }
    </style>
</head>
<body>
    <h1>Processamento de dados usando POST</h1>

    <?php
        if(empty($_POST['nome']) || empty($_POST['email']) ){ 
    ?>
        <p style="color:red">Você deve preencer nome e e-mail</p>
    <?php
        } else {  
    //capturando os dados transmitidos e sanitizando (limpando)
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $idade= filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);

    /*$interesses = $_POST['interesses'] ?? []; *///?? Este operador se chama null coalesce, e verifica se a referência existe ou não. Se a referência a esquerda não exite, retorna um valor. Se ele existir, retorna a referência a direita *Pesquisar isset para verificar se algo existe
    $interesses = filter_var_array( 
    $_POST['interesses'] ?? [],
    FILTER_SANITIZE_SPECIAL_CHARS
        );
    $informativos = filter_input(INPUT_POST, "informativos", FILTER_SANITIZE_SPECIAL_CHARS);

?>

<h2>Dados:</h2>
<pre><?=var_dump($_POST)?></pre>
<ul>
    <li>Nome: <?=$nome?></li>
    <li>Idade: <?=$idade?> anos</li>
    <li>E-mail: <?=$email?></li>
    <li>Mensagem: <?=$mensagem?></li>
    <li>Informativos: <?=$informativos?></li>
<?php if (!empty($interesses)) { // condicional simples. Possui apenas um if. Condicional encadeada, quando possui if, else. Condicional composta, quando misturamos estruturas condicionais diferentes, como if juntamente com switch e operador ternário?> 
    <!--O empty verifica se está vazio, junto com o operador de negação !. Se não estiver vazio, ele executa a condicional-->
    <li>Interesses: <?=implode(",", $interesses)?></li> <!--opção 1: implodir o array, transformando em string-->
</ul>

<ul>
  <li>Interesses: 
      <ul>
        <?php foreach($interesses as $interesse) {?> <!-- opção 2 - Acessar o array usando o loop-->
            <li><?=$interesse?></li>
        <?php } ?>
      </ul>

    </li>
</ul>
<?php } ?>

<?php 
} //fim if/else da validação dos campos obrigatórios 
?>

    
</body>
</html>