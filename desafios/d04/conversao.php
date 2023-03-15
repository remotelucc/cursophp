<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de moeda</title>
</head>
<body>
    <main>
        <h1>Conversor de moedas 2.0</h1>
        <?php 
        $dinheiro = $_POST["dinheiro"];

        echo "<p>Seus R$ $dinheiro equivalem a <strong>US$ $dolar</strong>*</p>";
        ?>
        <p>*Cotação obtida diretamente do site do <a href="https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos/CotacaoDolarPeriodo#eyJmb3JtdWxhcmlvIjp7IiRmb3JtYXQiOiJqc29uIiwiJHRvcCI6MTAwfX0=">Banco Central do Brasil</a></p>
        <button><a href="index.html">Voltar</a></button>
    </main>
</body>
</html>