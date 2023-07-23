<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
    $preco = $_REQUEST['preco'] ?? 0;
    $reaj = $_REQUEST['reaj'] ?? 0;
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Reajustador de preços</h1>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
    <label for="preco">Preço do produto (R$):</label>
    <input type="number" name="preco" id="preco" step="0.01" value="<?=$preco?>">
    <label for="percentual">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
    <input type="range" name="reaj" id="reaj" oninput="mudaValor()" value="<?=$reaj?>">
    <input type="submit" value="Reajustar">
    </form>

    </main>
    <section>
        <h2>Resultado do reajuste</h2>
        <?php 
        $aumento = $preco * $reaj / 100;
        $novo = $preco + $aumento;
        echo "<p>O produto que custava <strong>". numfmt_format_currency($padrao, $preco, "BRL") ."</strong>, com <strong>$reaj% de aumento</strong> vai passar a custar ". numfmt_format_currency($padrao, $novo, "BRL") ." a partir de agora.</p>";
        ?>
    </section>
    <script>
        function mudaValor() {
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>