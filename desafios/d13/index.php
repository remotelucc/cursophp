<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        main p {
            font-size: 0.8em;
        }

        section img {
            width: 30%;
        }
    </style>
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    $valor = $_REQUEST['valor'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="valor">Qual valor você deseja sacar? (R$)</label>
        <input type="number" name="valor" id="valor" step="5" value="<?=$valor?>">
        <p>*Notas disponíveis: R$100, R$50, R$10, R$5</p>
        <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <h2>Saque de <?= numfmt_format_currency($padrao, $valor, "BRL") ?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <?php 
        $cem = intdiv($valor, 100);
        $cinq = intdiv(($valor % 100), 50);
        $dez = intdiv(($valor % 50), 10);
        $cinco = intdiv(($valor % 10), 5);
        ?>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100 reais"> x<?= $cem ?></li>
            <br>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50 reais"> x<?= $cinq ?></li>
            <br>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10 reais"> x<?= $dez ?></li>
            <br>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5 reais"> x<?= $cinco ?></li>
        </ul>
    </section>
</body>
</html>