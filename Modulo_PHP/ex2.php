<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio de fixação</title>
</head>
<body>
    <?php
        function calcularImpostoRenda ($salario) {
            if($salario <= 1903.98) {
                return 'Isento';
            } else if($salario <= 2826.65) {
                return '7,5%';
            } else if($salario <= 3751.05) {
                return '15%';
            } else if($salario <= 4664.68) {
                return '22,5%';
            } else if($salario > 4664.68) {
                return '27,5%';
            }
        }

        echo calcularImpostoRenda(4700);
    ?>
</body>
</html>