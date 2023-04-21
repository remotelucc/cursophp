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
    $nasc = $_REQUEST['nasc'] ?? 2000;
    $anoatual = date("Y");
    $ano = $_REQUEST['ano'] ?? $anoatual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="nasc">Em que ano você nasceu?</label>
        <input type="number" name="nasc" id="nasc" value="<?= $nasc ?>">
        <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?= $anoatual ?></strong>)</label>
        <input type="number" name="ano" id="ano" value="<?= $ano ?>">
        <input type="submit" value="Qual será a minha idade">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
        $idade = $ano - $nasc
        ?>
        <p>Quem nasceu em <?= $nasc ?> vai ter <strong><?= $idade ?> anos</strong> em <?= $ano ?>!</p>
    </section>
</body>
</html>