<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <?php
        $num = $_POST["numero"];
        $suc = $num + 1;
        $ant = $num - 1;
        echo "<p>O número escolhido foi <strong>$num</strong></p>";
        echo "<p>O <em>sucessor</em> desse número é $suc</p>";
        echo "<p>O <em>antecessor</em> desse número é $ant</p>"
        ?>
    </main>
</body>
</html>