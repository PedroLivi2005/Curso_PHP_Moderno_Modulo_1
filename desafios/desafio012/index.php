<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 012</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $segundo = (int) ($_GET["segundo"] ?? 0);
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="" method="get">
            <label for="segundo">Qual o total de segundos</label>
            <input type="number" name="segundo" id="segundo">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando Tudo</h2>
        <?php
            $semana = floor($segundo / 604800);
            $resto = $segundo % 604800;

            $dia = floor($resto / 86400) ; // 86.400;
            $resto = $resto % 86400;
            
            $hora = floor($resto / 3600);
            $resto = $resto % 3600;
            
            $minuto = floor($resto / 60);
            
            $segundo_saida = $resto % 60;

            echo "<p>Analisando o valor que você digitou, <strong>" . number_format($segundo, 0, ".", ".") . "</strong> segundos equivalem a um total de:</p>";

            echo "<ul>
                    <li>" . number_format($semana, 0, ".", ".") . " semanas</li>
                    <li>" . number_format($dia, 0, ".", ".") . " dias</li>
                    <li>" . number_format($hora, 0, ".", ".") . " horas</li>
                    <li>" . number_format($minuto, 0, ".", ".") . " minutos</li>
                    <li>" . number_format($segundo_saida, 0, ".", ".") . " segundos</li>
                </ul>";
        ?>
    </section>
</body>
</html>