<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções matematicas</title>
</head>
<body>
    <?php
        // $num = 7.550000000000001 // .0 e .4 => baixo / .5 >= cima

        // echo ceil($num) // arredonda para cima
        // echo floor($num) // arrendoda para baixo
        // echo round($num) // arredonda com base na fração
        echo rand(); // gerar um valor aleatorio de 0 até randmax
        echo '<br>' . getrandmax();
        echo sqrt(9);
    ?>
</body>
</html>