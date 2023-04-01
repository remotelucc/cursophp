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
        $int = (int) $num;
        $frac = $num - $int;
        echo "Analisando o número ". number_format($num, 3, ",", ".") ." informado pelo usuário:";
        echo "<ul>
        <li>A parte inteira do número é ". number_format($int, 0, ",", ".") ."</li>
        <li>A parte fracionária do número é ". number_format($frac, 3, ",", ".") ."</li>
        </ul>";
        ?>
        <button><a href="index.html">Voltar</a></button>
    </main>
</body>
</html>