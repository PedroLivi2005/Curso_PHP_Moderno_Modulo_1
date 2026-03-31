<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $email = $_GET['email'] ?? "";
        $senha = $_GET['senha'] ?? "";
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
    
            <label for="email">Digitar email</label>

            <input type="email" name="email" id="email" value="<?=$email?>">

            <label for="senha">Digitar senha</label>

            <input type="password" name="senha" id="senha" value="<?=$senha?>">

            <input type="submit" value="Dividir">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da divisão</h2>
        <?php

            //$divisao = $valor1 / $valor2;
            //echo $divisao;

            echo "$email</br>";
            echo $senha;
        ?>
    </section>
    
</body>
</html>