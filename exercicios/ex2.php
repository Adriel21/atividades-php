<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício com array</title>
    <style>
        section {
            /* text-align: center; */
            border: 2px solid black;
            margin-bottom: 5px;
        }

        @media screen and (min-width: 750px) {
            section {
                text-align:center;
            }
        }
        
            
        
    </style>

</head>
<body>

<?php
  $dadosUm = ["adlira77", "adrieldiasdossantoslira@hotmail.com","Masculino","Francisco Morato", "448adriel","20"];
  $dadosDois = ["bre77", "brendajesusdeoliveira@gmail.com","Feminino", "Carapicuiba", "448brenda", "19"];

?>
<section>
        <h2>Dados 1</h2>
        <p>Usuário: <?=$dadosUm [0]?></p>
        <p>E-mail: <?=$dadosUm [1]?></p>
        <p>Sexo: <?=$dadosUm [2]?></p>
        <P>Idade: <?=$dadosUm [5]?> anos</P>
        <p>Cidade: <?=$dadosUm [3]?></p>
</section>



<section>
        <h2>Dados 2</h2>
        <p>Usuário: <?=$dadosDois [0]?></p>
        <p>E-mail: <?=$dadosDois [1]?></p>
        <p>Sexo: <?=$dadosDois [2]?></p>
        <P>Idade: <?=$dadosDois [5]?> anos</P>
        <p>Cidade: <?=$dadosDois [3]?></p>


</section>
</body>
</html>