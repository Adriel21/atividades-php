<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays assoaciativos</title>
    <style>
        /* Formatando as linhas de forma alternada */
        tr:nth-child(odd) {background: yellow; }
    </style>
</head>
<body>
    <h1>Exercício de array associativo</h1>
   
    <table style="border: 2px black solid">

    <?php
    $linguagens = [
        "HTML" => "Estrutura",
        "CSS" => "Estilo",
        "JS" => "Comportamento",
        "PHP" => "Back-End"];
    ?>
    <tr style="border: 1px black solid">
    <caption>Versão 1 - Com vetor</caption>

    <thead>
    <th>ID</th>
    <th>Linguagem</th>
    <th>Descrição</th>
    </tr>    
    </thead>

    <tbody>
        <?php 
        $id = 1;
        foreach( $linguagens as $linguagem => $descricao) { ?>
            <tr>
                <td><?=$id++ //pós-incremento - exibe para depois incrementar?></td>
                <td><?=$linguagem?></td>
                <td><?=$descricao?></td>
            </tr>
            <?php 
            //  ++$id;
             }  ?>
    </tbody>
        
        
 </table>

 <h2>Versão 2: Usando matriz - array dentro de array</h2>

 <?php 
    $linguagens2 = [
        [
            "id" => 1,
            "linguagem" => "HTML",
            "descricao" => "Estruturação"
        ],
        [
            "id" => 2,
            "linguagem" => "CSS",
            "descricao" => "Estilos"
        ],
        [
            "id" => 3,
            "linguagem" => "JS",
            "descricao" => "Comportamentos"
        ],
        
        [
            "id" => 4,
            "linguagem" => "PHP",
            "descricao" => "Back-End"
        ]
        ];
 ?>

 <table style="border: 2px solid black">
     <tr>
     <thead>
         <th>ID</th>
         <th>Linguagem</th>
         <th>Descrição</th>
     </thead>
     </tr>
     
     <?php foreach ($linguagens2 as $linguagem2){  ?>
     <tr>
         <td><?=$linguagem2['id']?></td>
         <td><?=$linguagem2['linguagem']?></td>
         <td><?=$linguagem2['descricao']?></td>
     </tr>

     <?php }?>
 </table>
    
</body>
</html>