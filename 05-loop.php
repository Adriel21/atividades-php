<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop com PHP</title>
   
</head>
<body>
    <h1>Estruturas de Controle de Repetição</h1>
    <hr>
    <h2>while (equivalente ao enquanto)</h2>    

    <?php
        $i = 1; //No mundo real, geralmente se utiliza como variável para contador, o i, j e k
        while ($i<=5){
            echo "<p>$i</p>";
            $i++;   //A mesma coisa que $contador=$contador+1. No uso prático, usamos o operador de incremento
        }
    ?>
<!-- Versão dois, que deverá ser utilizada, separando PHP do HTML -->
<?php
        $ii = 1; 
        while ($ii<=5){
?>
            <p><?=$ii?></p>
<?php
    $ii++;   
}
?>

<hr>

<h2>do/while (O que mais se aproxima do repita)</h2>

<?php 
    $j = 1;
    do {
?>

<div><h3>Olá!</h3></div>

<?php 
$j++;
} while ($j<=3)
?>
<hr>

<h2>for (equivalente ao para)</h2>

<?php
    //Para i de 1 ate 10 faca
    for($i=1; $i <= 10; $i++){
        echo $i." ";
    }

    /*Exercício
    1)Crie um array com os meses do ano*/
    /*2) Usando o loop for, acesse e mostre os nomes dos meses dentro de uma lista ordenada*/
?>
<ol>
<?php
    
    $meses = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"];
    $quantidade = count($meses);
    for($i=0; $i<$quantidade; $i++){
        //A função count conta a quantidade de dados dentro do array. E, devemos usar o menor. não <=
?>


<li><?=$meses[$i]?></li>


<?php
 }
?>
</ol>
<hr>

<h2>foreach - para cada... - alternativa ao for para trabalhar com arrays (de qualquer tipo)e objetos</h2>

<ol>

   <?php foreach ($meses as $mes) { ?>
   <li> <?=$mes?> </li>
   <?php } ?>

</ol>

<?php 
// Array associativo
$clubes = [
    "Corinthians" => "Timão",
    "Palmeiras" => "Porco",
    "São Paulo" => "Tricolor",
    "Santos" => "Peixe;"
];


//foreach ($clubes as $clube) {
    foreach($clubes as $clube => $apelido) { 
?>

<p><?=$clube." ".$apelido?></p>

<?php 
}

//Matriz = Array dentro de array
$alunos = [
    [
        "nome" => "Chaves",
        "idade" => 8

    ],

    [
        "nome" => "Chapolin",
        "idade" => 20
    ],

    [
        "nome" => "Chiquinha",
        "idade" => 10
    ]
    ];   
    
    foreach( $alunos as $aluno ){  
?>

<p> Nome:<?=$aluno["nome"]?></p>
<p> Idade:<?=$aluno["idade"]?></p>
<hr>

<?php 
}
?>


</body>
</html>