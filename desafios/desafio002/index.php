<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 002</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gereando um número aleatórios entre 0 e 100...</p>
        <?php
            $num = mt_rand(1, 100);
            echo "O valor gerado foi <strong>$num</strong>";        
        ?>
        <button onclick="window.location.reload()">🔄 Gerar outro</button>
    </section>
</body>
</html>
