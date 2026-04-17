<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 011</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = (float) ($_GET["preco"] ?? 0);
        $reajuste = $_GET["reajuste"] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <script>
            function atualizarPorcentagem(val) {
            document.getElementById('valor').innerHTML = val;
            }
        </script>
        <form action="" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" step="0.01">

            <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="valor"><?= $reajuste ?></span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" value="<?= $reajuste ?>" oninput="atualizarPorcentagem(this.value)">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $porcentagem = $preco * $reajuste / 100;
            $novo_preco = $preco + $porcentagem;

            echo "O produto que custava " . number_format($preco, 2, ",", ".") . ", com <strong>" . $reajuste . "% de aumento</strong> vai passar a custar <strong>R$" . number_format($novo_preco, 2, ",", ".") . "</strong> a partir de agora.";
        ?>
    </section>
</body>
</html>