<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 013</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $valor = (int) ($_GET["valor"] ?? 0);
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
            <form action="" method="get">
                <label for="">Qual o valor que você deseja sacar? (R$)*</label>
                <input type="number" name="valor" id="valor" min="0" step="5">

                <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
                <input type="submit" value="Sacar">
            </form>
    </main>
    <section>
        <?php
            $cem = floor($valor / 100);
            $resto = $valor % 100;

            $cinquenta = floor($resto / 50) ;
            $resto = $resto % 50;
            
            $dez = floor($resto / 10);
            $resto = $resto % 10;
            
            $cinco = floor($resto / 5);

            $padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);
            echo "<h2>Saque de " . numfmt_format_currency($padrao, $valor, "BRL") ." realizado</h2>";
            echo "O caixa eletrônico vai entregar as seguintes notas:";
            echo "
                <ul>
                    <li><img src='nota_100.jpg' alt='Nota de 100'> x" . $cem . "</li>
                    <li><img src='nota_50.jpg' alt='Nota de 50'> x" . $cinquenta . "</li>
                    <li><img src='nota_10.jpg' alt='Nota de 10'> x" . $dez . "</li>
                    <li><img src='nota_5.jpg' alt='Nota de 5'> x" . $cinco . "</li>
                </ul>
            ";
        ?>
    </section>
</body>
</html>
