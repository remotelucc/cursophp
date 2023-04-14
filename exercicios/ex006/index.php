<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        p#resultado {
            text-align: center;
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do formulário retroalimentado
        $valor1 = $_REQUEST['v1'] ?? 0;
        $valor2 = $_REQUEST['v2'] ?? 0;
        $soma = $valor1 + $valor2

    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="v1">Valor 1: </label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>" step="0.001">
            <label for="v2">Valor 2: </label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>" step="0.001">
            <input type="submit" value="Somar">
        </form>
        <p id="resultado">A soma desses valores é <?= $soma ?></p>
    </main>
</body>
</html>