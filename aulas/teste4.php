<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $variavel = "teste";
        $email = 'usuario@exemplo.com';
        $dominio = strstr($email, '@');
    ?>
    <main>
        <h1>Funções PHP</h1>
        <?php
            date_default_timezone_set("America/Sao_Paulo");

            echo "<p>Função  <b>date_default_timezone_set()</b> para mostrar o horário atual junto com a função date(): " . date("G:i:s T") . "</p><br>";
            
            echo "<p>Função <b>date()</b> para formatar uma data: " . date('d/M/Y') . "</p><br>";
            
            echo "<p>Função <b>var_dump()</b> para mostrar o tipo da variável: " . "</p>";
        
            echo "<p>" . var_dump($variavel) . "</p><br>";
            
            echo "<p>Função <b>mt_rand()</b> para gerar números aleatórios, exemplo entre 0 e 100:" . mt_rand(0, 100) . "</p><br>";

            echo "<p>Função <b>strstr()</b> localiza a primeira ocorrência de uma string dentro de outra, retornando a parte da string desde essa ocorrência até o final. Exemplo para retornar apenas o dominio de usuario@exemplo.com: " . $dominio . "</p><br>";

            echo "<p>Função <b>sqrt()</b> para calcular a raiz quadrada. Exemplo \u{221a}64 = " . sqrt(64) . "</p><br>";

            echo "<p>Função " . "" . "</p><br>";
        ?>
    </main>
</body>
</html>