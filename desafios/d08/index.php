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
    $numero = $_REQUEST['numero'] ?? 1;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero" step="0.001">
        <input type="submit" value="Calcular raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
        $quadrado = $numero ** (1/2);
        $cubico = $numero ** (1/3);
        echo"<p>Analisando o <strong>número ". number_format($numero, 3, ",", ".") ."</strong>, temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong>". number_format($quadrado, 3, ",", ".") ."</strong></li>
            <li> sua raiz cúbica é <strong>". number_format($cubico, 3, ",", ".") ."</strong></li>
        </ul>"
        ?>
    </section>
</body>
</html>