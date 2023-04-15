<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
    $total = $_REQUEST['salario'] ?? 0;
    $minimo = 1380;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="salario">Salário (R$)</label>
        <input type="number" name="salario" id="salario">
        <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
        $quantia = intdiv($total, $minimo);
        $resto = $total % $minimo;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo"<p>Quem recebe um salario de " . numfmt_format_currency($padrao, $total, "BRL") . " ganha <strong>" . numfmt_format_currency($padrao, $quantia, "BRL") . " salário(s) mínimo(s) </strong>+ " . numfmt_format_currency($padrao, $resto, "BRL") . "</p>"
        ?>
    </section>
</body>
</html>