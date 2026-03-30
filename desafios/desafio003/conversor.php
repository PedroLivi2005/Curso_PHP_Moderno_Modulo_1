<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 003 Resposta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
            $number = (float) ($_GET["numero"] ?? 0);
            $conversor = $number / 5.22;
            //Formatação de moedas com internacionalização
            //Biblioteca intl (Internallization PHP) por padrão vem desativado no XAMPP
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $number, "BRL") . " equivalem a<strong> " . numfmt_format_currency($padrao, $conversor, "USD") . "</strong></p>";
        ?>
        <p><strong>*Cotação fixa de R$5,22</strong> informada diretamente no código.</p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>