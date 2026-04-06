<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dessafio 010</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $ano = date("Y"); 
        $ano_base = (int) ($_GET["anobase"] ?? 2000);
        $ano_idade = (int) ($_GET["anoidade"] ?? $ano);
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="anobase">Em que ano você nasceu?</label>
            <input type="number" name="anobase" id="anobase" value="<?=$ano_base?>">

            <label for="anoidade">Quer saber sua idade em que ano? (atualmente estamos em <?= $ano?>)</label>
            <input type="number" name="anoidade" id="anoidade" value="<?=$ano_idade?>">

            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $idade = $ano_idade - $ano_base;

            echo "Quem nasceu em " . $ano_base . " vai ter <strong>" . $idade . "</strong> anos em " . $ano_idade . "!";
        ?>

    </section>
</body>
</html>