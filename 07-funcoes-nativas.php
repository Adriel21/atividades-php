<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas</title>
</head>
<body>
    <h1>Exemplos de funções nativas do PHP</h1>
    <hr>

    <h2>Strings</h2>
<?php 
    /* trim(param) -> remove espaços antes e depois de strings */
    $nome = "   Tiago B. dos Santos          ";
    $nomeSemEspaco = trim ($nome);
?>
    <pre><?=var_dump($nome)?></pre>
    <pre><?=var_dump($nomeSemEspaco)?></pre>

      <h3>str_replace</h3>

 <?php
    //   Uma função que nos possibilita trocar palavras por outras. Como em comentários que alguém ofendeu outra pessoa. Substitui texto por texto
      $fraseFeia = "<p>Fulano é um bobão e xarope</p>";
      $fraseBonita = str_replace(
          ["bobão", "xarope"],
          ["cara legal", "genial"],
       $fraseFeia);
    
        echo $fraseFeia;
        echo $fraseBonita;
  ?>

        <h3>explode()</h3>
 <?php
            // Essa função nos permite transformar uma string em um array. A função irá procurar pelo separador que está dividindo as informações na string e organizá-las em um array já com o índice
            $linguagens = "HTML - CSS - JS";
            $arrayLinguagens = explode(" - ", $linguagens);
?>
        
        <pre><?=var_dump($linguagens)?></pre>
        <pre><?=var_dump($arrayLinguagens)?></pre>

    <h2>Arrays</h2>

    <h3>implode()</h3>
<?php
        $bandas = ["Savatage", "Nightwish", "Ghost"];
        $stringBandas = implode(" / ", $bandas);
?>

    <pre><?=var_dump($bandas)?></pre>
    <pre><?=var_dump($stringBandas)?></pre>

    <h3>extract()</h3>
<?php
// Com a função extract (), podemos utilizar a informação dentro do array como se fosse variável. Assim como na linha 68, 69, 70, 71
$aluno = [
    "id" => "Fulano",
    "idade" => 25,
    "sexo" => "masculino",
    "cidade" => "São Paulo"
];
extract($aluno);
?>
<p><?=$id?></p>
<p><?=$idade?></p>
<p><?=$sexo?></p>
<p><?=$cidade?></p>


    <h2>Filtros</h2>
<?php 
// Serve para validar a informação do email
$email = "tiago@gmail.com.br";
$ataque = "<script>document.body.innerHTML = 'Sou ráqui!! mwahaha >.<'</script>";
$ataqueAnulado = filter_var($ataque, FILTER_SANITIZE_SPECIAL_CHARS);
echo $ataqueAnulado;

// echo $ataque;
?>
<p><?=var_dump(filter_var($email, FILTER_VALIDATE_EMAIL))?></p>

    <h2>Segurança (Criptografia)</h2>
<?php
  $senha = "123abc"; // texto puro ou plain text (sem segurança)

    /*  Algoritmos mais comuns
    MD5, SHA1, SHA256 - pega o que foi digitado pelo usuário e encripta.
     */
  $senhaMD5 = md5($senha);
  $senhaSHA1 = sha1($senha);
  $senhaSHA256 = hash('sha256', $senha);

  //Método recomendado atualmente para senhas
  $senhaSegura = password_hash($senha, PASSWORD_DEFAULT); //A senha gerada por essa função com a constante PASSWORD_DEFAULT gera um hash dinâmico
?>

<p>Senha (texto puro): <?=strlen($senha)?></p>
<p>Senha (MD5):<?=$senhaMD5?></p>
<p>Senha (SHA1):<?=$senhaSHA1?></p>
<P>Senha (SHA256):<?=$senhaSHA256?></P>
<!-- HASH DE 60 caracteres -->
<P>Senha (usando password_hash):<?=$senhaSegura?></P>

<?php 
$senhaDigitada = "123abc";
if(password_verify($senhaDigitada, $senhaSegura)){
    echo "beleza, senhas iguais...";
}else { 
    echo "opa, senha errada!";

}
?>
     
</body>
</html>