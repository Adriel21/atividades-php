<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral</title>
    <style>
        .destaque {color:red;}
    </style>
</head>
<body>
    <h1 class="destaque">Trabalhando com PHP</h1>
    <hr>

    <?php 
    //Geração de textp (String)
        echo "Amanhã tem Corinthians e Palmeiras";

        //Geração de texto estruturado (Com tags e atributos)
        echo "<h2>Gerando <span class='destaque'>HTML</span> através do PHP.</h2>";
        // echo "<h2>Gerando <span class=\"destaque\">HTML</span> através do PHP.</h2>"; - asspas duplas dentro de outra aspas duplas com escape - barras invertidas antes das aspas
    ?>
    
</body>
</html>