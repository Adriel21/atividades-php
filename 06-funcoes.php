<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>
    <h1>Criando e usando funções</h1>
    <hr>

    <h2>Funções como sub-rotinas ou procedimento</h2>

    <?php 
     function dadosAutor () { 
        echo "<div>";
        echo "<p>Adriel Dias d. S. Lira</p>";
        echo "<p>adrieldias2001@hotmail.com";
        echo "</div>";
    }
    ?>

    <article>
        <h3>Chamada de sub-rotina</h3>
        <?=dadosAutor()?>
    </article>

    <h2>Função com retorno de dados</h2>
    <?php
    function dadosCurso() {
        return "Téc. em informática para internet";
    }
    ?>


    <p>Estamos no curdo de <?=dadosCurso()?></p>

    <hr>
    <!-- Variável fora da função, se chama variável global -->
    <h2>Função com parâmetros (ou argumentos)</h2>
    <?php 

    //Variável local - quando está dentro da função. O terceiro paramêtro quando não informado assumirá o valor padrão (no caso, zero)
    function soma($valor1, $valor2, $valor3 = 0) {
        $total= $valor1 + $valor2 + $valor3;
        return $total;
    }
    ?>

    <p><?=soma(10, 20, 30)?></p>
    <p><?=soma(100, 200, 300)?></p>
    <p><?=soma(1, 2)?></p>

    <?php
    $resultado = soma(1500, 2000, 125); //Funções que retornam dados (apenas) podem armazenar o reultado em uma variável global

    ?>

    <p><?=$resultado?></p>


    <?php
    // Passando uma função como condição de um if
        if (soma(500, 200, 700) > 1000){
            echo "Resultado da função é maior ou igual a 1000";

        }


        function verificaNegativo($valor){
        //versão 1: if/else tradicional
        //     if( $valor < 0){
        //         return "negativo";

        //     }else {  
        //         return "não é negativo";
        // }
        //versão 2: if/else usando operador ternário/if-else de uma linha/shorthand if-else
        return $valor < 0 ? "negativo" : "não é negativo";
    }
    ?>

    <p><?=verificanegativo(10)?></p>
    <p><?=verificanegativo(-150)?></p>
    <p><?=verificanegativo(258.99)?></p>
    <hr>
    <h2>Função anônima (closure, lambda)</h2>
    <?php 
    $formataPreco = function($valor){
        return "R$ ".number_format($valor, 2, ",", ".");
    };
    ?>

    <p><?=$formataPreco(1000)?></p>
    <p><?=$formataPreco(1500)?></p>
    <p><?=$formataPreco(1500.75)?></p>

    <hr>

    <h2>Indução de tipos</h2>
    
    <?php
    /*tipo de dados do PHP
    float: valores numéricos podendo ter casa decimal
    int: valores numéricos inteiros
    string: caracteres*/
      function calculaMedia(float $nota1, float $nota2):float {
        $media = ($nota1+$nota2)/2; 
        return $media;
       }  
    ?>

    <p><?=calculaMedia(10,7)?></p>
    

</body>
</html>