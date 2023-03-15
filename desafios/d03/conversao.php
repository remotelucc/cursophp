<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de moeda</title>
</head>
<body>
    <main>
        <h1>Conversor de moedas 1.0</h1>
        <?php 
        $dinheiro = $_POST["dinheiro"];
        $dolar = $dinheiro / 5.29;
        echo "<p>Seus R$ $dinheiro equivalem a US$ <strong>$dolar</strong></p>"
        ?>
        <p><strong>*Cotação fixa de R$5,29</strong> informada diretamente no código</p>
        <button><a href="index.html">Voltar</a></button>
    </main>
</body>
</html>