<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário e processamento</title>
</head>
<body>
  
<?php
/*detectar quando um formulário é <acionado></acionado*/
if (!isset($_POST['enviar'])) { //isset verifica se algo existe, neste caso, se botão existe ou fora clicado?>   
    <form action="" method="post">
    <p>
        <label for="inome">Nome: </label>
        <input type="text" name="nome" id="inome">
    </p>
     <p>
        <label for="iemail">Email: </label>
        <input type="email" name="email" id="iemail">
    </p>
    <!-- Importante dar um name para o botão -->
    <button type="submit" name="enviar">Enviar</button>
</form>

<?php } else {  
    if (empty($_POST['nome']) & empty($_POST['EMAIL']) ) {
?>
     <p>Preencha os campos</p>
     <p><a href="10-formulario-processamento.php">Voltar</a></p>
<?php

    } else {  
    $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    ?>
<section>
    <h2>Dados</h2>
    <p>Nome: <?=$nome?></p>
    <p>E-mail: <?=$email?></p>
</section>
<?php 
       }  
    }

?>


    
</body>
</html>