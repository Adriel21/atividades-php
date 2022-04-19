<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando Arrays no PHP</title>
</head>
<body>
   <h1>Trabalhando com Arrays (vetores e matrizes)</h1>
   <hr>

    <h2>Arrays com índice numéricos</h2>

   <?php 
    //Sintaxe  com colchetes
    $bandas = ["Savatage", "Iron Maiden", "Nighwish"];

    //Sintaxe com função array ()
    $cursos = array("HTML5", "CSS3", "NodeJs", "Photoshop");

    //Sintaxe indicando índice manualmente 
    $comidaDeButeco[0] = "Bolinho de Bacalhau";
    $comidaDeButeco[1] = "Pastel";
    $comidaDeButeco[2] = "Esfiha de carne";

    //constantes de arrays 
    define("UNIDADE_SENAC", ["Penha", "Tatuapé", "Itaquera"]);
    const FRUTAS = ["Morango", "Abacaxi"];
   ?>

   <h3>Acessando os dados</h3>

   <ol>
       <li>Uma das bandas que mais gosto: <?=$bandas[2]?></li>
       <li>Linguagem base da web: <?=$cursos[0]?></li>
       <li>Quero comer:<?=$comidaDeButeco[0]?></li>
       <li>Senac<?=UNIDADE_SENAC[1]?></li>
       <li>Fruta: <?=FRUTAS[1]?></li>
   </ol>

   <h2>Array associativos</h2>

   <?php
    $curso = [
        "nome" => "Gastronomia",//Cada uma dessas é uma chave associativa
        "cargaHoraria" => 150,
        "unidade" => "Penha"
    ];
   ?>

    <P>Nome do curso: <?=$curso["nome"]?></P>
    <p>CH: <?=$curso["cargaHoraria"]?></p>
    <p>Unidade: Senac <?=$curso["unidade"]?></p>


    <h2>Matriz (array dentro de array)</h2>

    <?php
        //Plano de estudos de Front, Back e Design
        $planoDeEstudos = [
               //0                      1         2
            ["JavaScript Avançado", "Node.js", "React"], //0

              //0     1       2        3 coluna
            ["PHP", "POO", "MySQL", "Python"], //1 linha

            //    0                  1           2
            ["Teoria das Cores", "Photoshop", "Ux/Ui"] //2
        ];
    ?>

    <!-- Mini-exercício
Crie uma lista não-ordenada e mostre nela os seguintes itens:
React, PHP/MySQl, Photoshop e Teoria das cores
 -->
    <h3>Exibição dos cursos com array dentro de array (matriz)</h3>
 <ul>
     <li><?=$planoDeEstudos[0][2]?></li>
     <li><?=$planoDeEstudos[1][0]?>/<?=$planoDeEstudos[1][2]?></li>
     <li><?=$planoDeEstudos[2][1]?></li>
     <li><?=$planoDeEstudos[2][0]?></li>
 </ul>

 <h2>Análise de arrays (debug/depuração de código)</h2>

 <pre><?php var_dump($bandas); ?></pre>    <!--A tag html pre adiciona uma pré formatação-->
 <pre><?=var_dump($bandas)?></pre>

 <hr>

 <pre><?php print_r($bandas); ?></pre>
 <pre><?=print_r($bandas)?></pre>

 <hr>

 <pre><?=var_dump($planoDeEstudos)?> </pre>
    
</body>
</html>