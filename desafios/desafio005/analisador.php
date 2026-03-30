<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 005 - Resposta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analizador de Número Real</h1>
        <?php
        $number = (float) ($_GET["numero"] ?? 0);
        //$fracionaria = fmod($number, 1);

        echo "<p>Analisando o número <strong>" . number_format($number, 3, ",", ".") . "</strong> informado pelo usuário:</p>";
        
        $int = (int) $number;
        $fra = $number - $int;

        echo "  <ul>
                    <li>A parte inteira do número é <strong>" . number_format($int, 0, ",", ".") . "</strong></li>
                    <li>A parte fracionária do número é <strong>" . number_format($fra, 3,",", ".") . "</strong></li>
                </ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
