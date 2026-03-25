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
            $number = $_GET["numero"];
            $conversor = $number / 5.22;
            echo "Seus R$ $number equivalem a U$ <strong>" . round($conversor, 2) . "</strong>";
        ?>
        <p><strong>*Cotação fixa de R$5,22</strong> foi informada diretamente no código</p>
        <button>
            <a href="javascript:history.go(-1)">Voltar</a>
        </button>
    </main>
</body>
</html>