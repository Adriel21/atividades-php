<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>
<body>
    <h1>Controle</h1>
    <form method ="post" action="ex07.php">
        <fieldset>
            <label for="iproduto">Produto: </label>
            <input type="text" name="nproduto" id="iproduto" placeholder="Nome do produto">
        </fieldset>

        <?php
            $fabricante = [
                'Sony',
                'Microsoft',
                'Nintendo',
                'Sega'
            ];
        ?>

        <label for="ifabricante">Fabricante: </label>
       
        <select name="nfabricante" id="ifabricante">
        <option value=""></option>
        <?php 
        $quantidade = count($fabricante);
            for ($i=0; $i<$quantidade; $i++) {?> 
            <option value="<?=$i?>"><?=$fabricante[$i]?></option>
            <?php } ?>
        </select>
       
        
        <label for="ipreco">Preço R$: </label>
        <input type="number" id="ipreco" name="npreco" min="100" max="10000" step="0.01" placeholder="Digite o preço">

        <label for="itext"></label> <br> <br>
        <textarea name="ntext" id="itext" cols="30" rows="10"></textarea>
        
        <button type="submit" name="encaminhar">Enviar</button>
    </form>
</body>
</html>