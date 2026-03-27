<!DOCTYPE html>
<html lang="en">
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
        $number = $_GET["numero"];
        $fracionaria = fmod($number, 1);


        echo "Analisando o número<strong> $number </strong>informado pelo usuário:";
        echo "  <ul>
                    <li>A parte inteira do número é <b>" . round($number) . "</b></li>
                    <li>A parte fracionária do número é <b>" . round($fracionaria, 4) . "</b></li>
                </ul>";
        ?>
        <button class="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
