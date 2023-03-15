<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador de número real</title>
</head>
<body>
    <main>
        <h1>Analisador de número real</h1>
        <?php 
        $num = $_POST["num"];
        $int;
        $frac;
        echo "<p>Analisando o número <strong>$num</strong> informado pelo usuário:</p>";
        echo "<ul>
        <li>A parte inteira do número é $int</li>
        <li>A parte fracionária do número é $frac</li>
        </ul>";
        ?>
    </main>
</body>
</html>