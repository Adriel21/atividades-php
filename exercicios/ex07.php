<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
       <style>
           div {
               text-align: center;
               font-size: 24px;
           }
         </style>
    </head>
<body>
    <?php
    if(empty($_POST['nproduto']) || empty($_POST['npreco']) ){ 
        ?>  
    <p>Informe o nome do produto e o valor</p>
    <?php } else {  
    
    $produto = filter_input(INPUT_POST, "nproduto", FILTER_SANITIZE_SPECIAL_CHARS);
    $fabrica = filter_input(INPUT_POST, "nfabricante" , FILTER_SANITIZE_SPECIAL_CHARS);
    $preco = filter_input(INPUT_POST, "npreco", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    //$descricao = filter_input(INPUT_POST, "ntext", FILTER_SANITIZE_SPECIAL_CHARS);

    $descricao = $_POST ['ntext']; 
     
    ?>



<div>
    <h2>Resultado</h2>
    <p>Nome do produto: <?=$produto?></p>
    <p>Fabricante: <?=$fabrica?></p>
    <P>Preço R$: <?=number_format($preco, 2,",",".")?></P>
    <p>Mensagem: <?=nl2br($descricao)?></p> <!--new line 2 break (cria br)-->
</div>
<?php } ?>
</body>
</html>