<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 001 Resposta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
                $_numero = $_GET["numero"];
        
                $antecessor = $_numero - 1;
                $sucessor = $_numero + 1;

                echo "<p>O número escolhido foi <strong>$_numero</strong></p>";
                echo "<p>O seu <i>antecessor</i> é $antecessor</p>";
                echo "<p>O seu <i>sucessor</i> é $sucessor</p>";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>
