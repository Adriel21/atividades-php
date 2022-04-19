<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - 03 - PHP</title>
</head>
<body>
    <h1>Condicionais</h1>

    <div>
        <?php
            $salario = 2500;
            $ajusteum = 0.05;
            $ajustedois = 0.10;
            $ajustetres = 0.15;


            if ($salario<=2000) {
                echo $salario+=$salario*$ajusteum;
            } elseif ($salario<=2500) {
                echo $salario+=$salario*$ajustedois;
            } elseif ($salario<=3000) {
                echo $salario+=$salario*$ajustetres;
            } else echo "Erro no $salario informado"
            ?>
    </div>
</body>
</html>