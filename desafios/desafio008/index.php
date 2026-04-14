<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 008</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $numero = (int) ($_GET['numero'] ?? 1);
    ?>
    <main>
        <h1>Informe o número</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
        echo "Analisando o <strong>número " . $numero . "</strong>, temos:";

        $raiz_qudra = sqrt($numero); // ou $numero ** (1/2);
        $raiz_cubica = $numero ** (1/3);

        echo "  <ul>
                    <li>A sua raiz quadrada é <strong>" . number_format($raiz_qudra, 3, ",", ".") . "</strong></li>
                    <li>A sua raiz cúbica é <strong>" . number_format($raiz_cubica, 3, ",", ".") . "</strong></li>
                </ul>";
        ?>
    </section>
</body>
</html>