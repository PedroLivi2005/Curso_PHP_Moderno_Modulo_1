<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio009</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $primeiro_valor = (int) ($_GET["v1"] ?? 0); 
    $primeiro_peso = (int) ($_GET["p1"] ?? 1);

    $segundo_valor = (int) ($_GET["v2"] ?? 0);
    $segundo_peso = (int) ($_GET["p2"] ?? 1);
    ?>
    <main>
        <h1>Médias Aritimédicas</h1>
        <form method="$_GET">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1" value="<?=$primeiro_valor?>">

            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="p1" value="<?=$primeiro_peso?>">

            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="v2" value="<?=$segundo_valor?>">

            <label for="p2">2° Peso</label>
            <input type="number" name="p2" id="p2" value="<?=$segundo_peso?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
        echo "Analisando os valores $primeiro_valor e $segundo_valor:";

        $media_simples = ($primeiro_valor + $segundo_valor) / 2;

        $media_ponderada = ($primeiro_valor * $primeiro_peso + $segundo_valor * $segundo_peso) / ($primeiro_peso + $segundo_peso);

        echo "
            <ul>
                <li>A <strong>Média Aritimédica Simples</strong> entre os valores é igual a " . number_format($media_simples, 2, ",") . ".</li>
                <li>A <strong>Média Aritimédica Ponderada</strong> com peso $primeiro_peso e $segundo_peso é igual a " . number_format($media_ponderada, 2, ",") . ".</li>
            </ul>
        ";
        ?>
    </section>
</body>
</html>