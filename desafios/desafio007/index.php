<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 007</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $salario = (float) ($_GET['salario'] ?? 0);
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário(R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>">
            <input type="submit" value="Calcular">
        </form>
        <p>Considerando o salário minímo de <strong>R$1.380,00</strong></p>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
        //Formatação de moedas com internacionalização
        //Biblioteca intl (Internallization PHP) por padrão vem desativado no XAMPP
        //https://www.youtube.com/watch?v=483Koc7TLu8&list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&index=31&t=971s
        $padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);
        
        $salario_minimo = 1380;
        $qtn_minimo = ($salario / $salario_minimo);
        $resto_salario = ($salario % $salario_minimo);

        echo "Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha <strong>" . floor($qtn_minimo) . " salários mínimos</strong> + " . numfmt_format_currency($padrao, $resto_salario, "BRL") . ".";
        ?>
    </section>
</body>
</html>