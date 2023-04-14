<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="n1">Dividendo: </label>
            <input type="number" name="n1" id="n1" value="<?= $numero1 ?>" step="0.001">
            <label for="n2">Divisor: </label>
            <input type="number" name="n2" id="n2" value="<?= $numero2 ?>" step="0.001">
            <input type="submit" value="Analisar">
        </form>
        <?php 
        // Capturando os dados do formulário retroalimentado
        $numero1 = $_REQUEST['n1'];
        $numero2 = $_REQUEST['n2'];
        $resto = $numero1 % $numero2;
        $divisao = $numero1 / $numero2;
            ?>
        <section>
            <h2>Estrutura da divisão</h2>
            <p id="resultado">
                <span><?= $numero1 ?></span>
                <span><?= $numero2 ?></span>
                <span class="resto"> <?= $resto ?></span>
                <span><?= (int)$divisao ?></span>
            </p>
        </section>
    </main>
</body>
</html>