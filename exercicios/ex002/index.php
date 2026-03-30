<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); //Configura timezone para GMT -3
        echo "Hoje é dia " . date("d/M/Y"); //"d" é dia do mês e "D" é dia da semana
        echo " e a hora atual é " . date("G:i:s T"); //"G" é hora, "i" é minuto e "s" é segundo
    ?>
</body>
</html>
