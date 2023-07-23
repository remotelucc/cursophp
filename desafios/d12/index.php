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
    $segundos = $_REQUEST['segundos'] ?? 0;
    ?>
    <main>
    <h1>Calculadora de tempo</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>">
    <label for="segundos">Qual é o total de segundos?</label>
    <input type="number" name="segundos" id="segundos" value="<?=$segundos?>">
    <input type="submit" value="Calcular">
    </form>
    </main>
    
    <?php 
    $semanas = intdiv($segundos, 604800);
    $dias = intdiv(($segundos % 604800), 86400);
    $horas = intdiv(($segundos % 86400), 3600);
    $minutos = intdiv(($segundos % 3600), 60);
    $resto = $segundos % 60 ?? $_REQUEST['segundos'];
    ?>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou <strong><?= $segundos ?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?= $semanas ?> semanas</li>
            <li><?= $dias ?> dias</li>
            <li><?= $horas ?> horas</li>
            <li><?= $minutos ?> minutos</li>
            <li><?= $resto ?> segundos</li>
        </ul>
    </section>
</body>
</html>