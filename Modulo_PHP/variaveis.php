<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variaveis</title>
</head>
<body>
    <?php
        // String
        $nome = "Jorge Sant Ana";

        // Int
        $idade = 29;

        // Float
        $peso = 82.5;

        // Boolean
        $fumante = true; // true (valor = 1) ou false (valor = vazio)
    ?>

    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?= $nome ?> </p>
    <p>Idade: <?= $idade ?> </p>
    <p>Peso: <?= $peso ?> </p>
    <p>Fumante: <?= $fumante ?> </p>
</body>
</html>