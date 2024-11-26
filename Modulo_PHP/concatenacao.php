<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenação</title>
</head>
<body>
    <?php
        $nome = "João";
        $cor = "preto";
        $idade = 26;
        $atividade = "andar de bicicleta";

        // Operador .
        echo "Olá " .$nome. ", vi que sua cor preferida é " .$cor. ", estou vendo também que você posssui " .$idade. " anos e que gosta de " .$atividade.".";
    ?>
    <br>
    <hr>
    <?php
        // Aspas duplas
        echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo também que você posssui $idade anos e que gosta de $atividade.";
    ?>
</body>
</html>