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
    $valor1 = $_REQUEST['valor1'] ?? 0;
    $valor2 = $_REQUEST['valor2'] ?? 0;
    $peso1 = $_REQUEST['peso1'] ?? 1;
    $peso2 = $_REQUEST['peso2'] ?? 1;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">1° Valor</label>
            <input type="number" name="valor1" id="valor1" step="0.01" value="<?= $valor1 ?>">
            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?= $peso1 ?>">
            <label for="valor2">2° Valor</label>
            <input type="number" name="valor2" id="valor2" step="0.01" value="<?= $valor2 ?>">
            <label for="peso2">2° Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?= $peso2 ?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das médias</h2>
        <?php 
        echo "<p>Analisando os valores ". number_format($valor1, 2, ",", ".") ." e ". number_format($valor2, 2, ",", ".") .":</p>";
        $mediasimples = ($valor1 + $valor2) / 2;
        $mediaponderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
        echo "<ul>
        <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a ". number_format($mediasimples, 2, ",", ".") ."</li>
        <li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a ". number_format($mediaponderada, 2, ",", ".") ."</li>
    </ul>"
        ?>
    </section>
</body>
</html>