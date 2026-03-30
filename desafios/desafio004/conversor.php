<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 004 Resposta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <?php
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $number = (float) ($_GET["numero"] ?? 0);

            $conversor = $number / $cotacao;
            //Formatação de moedas com internacionalização
            //Biblioteca intl (Internallization PHP) por padrão vem desativado no XAMPP
            $padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $number, "BRL") . " equivalem a <strong>". numfmt_format_currency($padrao, $conversor, "USD") . "*</strong></p>";
        ?>
        <p>*Cotação obtida diretamente do site do <a href="https://www.bcb.gov.br" target="_blank">Banco Central do Brasil</a></p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>