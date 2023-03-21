<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Randomizer</title>
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 1 e 100...</p>
        <?php 
        $num = mt_rand(0, 100);
        echo "<p>O valor gerado foi <strong>$num</strong></p>"
        ?>
        <button onclick="javascript:document.location.reload()">Gerar outro</button>
    </main>
</body>
</html>