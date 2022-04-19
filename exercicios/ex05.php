<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 - utilizando funções</title>
     
    <style>
        .aprovado {color:blue };
        .reprovado{color:red };
    </style>
    
</head>
<body>
    <?php
        $nome = "Adriel";
        $instituicao = "Senac Penha";
        $nota1 = 10;
        $nota2 = 9.9;
       function soma($nota1,$nota2) {
        $media = ($nota1+$nota2)/2;
        return $media;
       }  
      $mediaum = soma($nota1,$nota2);
      
      function conceito($mediaum) { 
       return $mediaum >= 7 ? "Aprovado" : "Reprovado";
       }
    ?>

   

    <p>Nome:<?=$nome?></p>
    <p>Instituição:<?=$instituicao?></p>
    <p>A média das notas é: <?=soma($nota1,$nota2)?></p>
    <p>A situação do aluno é: <?=conceito($mediaum)?></p>
    
    
</body>
</html>