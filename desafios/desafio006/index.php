<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 006</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $valor1 = (int) ($_GET['v1'] ?? 0);
        $valor2 = (int) ($_GET['v2'] ?? 0);

        //$email = $_GET['email'] ?? "";
        //$senha = $_GET['senha'] ?? "";
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
           
            <!--<label for="email">Digitar email</label>
            <input type="email" name="email" id="email">
            <label for="senha">Digitar senha</label>
            <input type="password" name="senha" id="senha">-->
            <input type="submit" value="Analizar">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da divisão</h2>
        <?php
            $divisao = $valor1 / $valor2;
            $resto = $valor1 % $valor2;
            //echo "Dividendo: $valor1<br>";
            //echo "Divisor: $valor2<br>";
            //echo "Resultado da divisão: " . round($divisao, 2) . "<br>";
            //echo "Resto da divisão: $resto";
            echo "
            <style>
                .divisor-container {
                    display: grid;
                    grid-template-columns: auto auto;
                    width: fit-content;
                    font-family: sans-serif;
                    font-size: 34px;
                    text-align: center;
                }
                .dividendo{
                    padding: 15px 45px;
                    /*Padding no CSS é a propriedade usada para definir o espaçamento 
                    interno entre o conteúdo de um elemento e sua borda.*/   
                }
                .divisor{
                    padding: 15px 45px;
                    border-left: 2px solid #000;
                    border-bottom: 2px solid #000;
                }
                .resto{
                    padding: 15px 45px;
                    text-decoration: underline;
                }
                .resultado{
                    padding: 15px 45px;
                    border-left: 2px solid #000;
                }
            </style>
            <div class='divisor-container'>
                <div class='dividendo'>$valor1</div>
                <div class='divisor'>$valor2</div>
                <div class='resto'>$resto</div>
                <div class='resultado'>$divisao</div>
            </div>
            ";
            //echo strstr($email, '@') . "<br>";
            //echo $senha;
        ?>
    </section>
</body>
</html>