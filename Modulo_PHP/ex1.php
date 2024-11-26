<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio de fixação 01</title>
</head>
<body>
    <?php
        $idade = 69;
        $peso = 50;

        if($idade >= 16 && $idade <= 69 && $peso >= 50) {
            echo "Idade: $idade <br>";
            echo "Peso: $peso <br>";
            echo "Atende aos requisitos";
        } else {
            echo "Idade: $idade <br>";
            echo "Peso: $peso <br>";
            echo "Não atende aos requisitos";
        }
    ?>
</body>
</html>