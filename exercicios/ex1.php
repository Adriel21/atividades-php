<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios 1 - Php</title>
    <style>
        .data {
            background: yellow;
            border-bottom: 2px black solid
             }

     p {
        border-bottom: 2px black solid
     }

     div {
         border: solid red 2px;
     }

     .faltas {
         background: red;
         color: black;
     }
    </style>
</head>
<body>
    <h1>Dados do estudante</h1>
    <?php 
    $curso = "Sistemas de informação"; //string
    $nome = "Adriel"; //string
    // $dataDeHoje = "18/03/2022"; //string
    // Configurando o timezone da nossa região para que não exiba o horário do servidor
    date_default_timezone_set ('America/Sao_Paulo');
    $date = date("d/m/Y H:i"); //Função date() automatiza o dado da data atual do recebida pelo servidor
    $cargahoraria = 5000; //inteiro
    $limitedefaltas = $cargahoraria*0.25; //Podemos realizar o cálculo logo na criação da variável/constante 

    ?>
    <!--Saida de dados com sintaxe simplificada -->
    <div>
       <h2>Acesso feito em <?=$date?></h2>
       <!-- <p class="data">Data de hoje <?php echo $dataDeHoje?></p> -->
       <p>Nome do estudante:  <?=$nome?></p>
       <p>Estudante de:<?=$curso?></p>
       <p>Carga horária em horas:<?=5000?>h</p>
       <p class="faltas">Limite de faltas:<?=$limitedefaltas?>h</p>
    </div>
    
</body>
</html>