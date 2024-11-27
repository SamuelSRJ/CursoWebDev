<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio de fixação 03</title>
</head>
<body>
    <?php
        $resultado = array();
        for($i = 0; $i < 6; $i++) { // A condicional poderia ser baseada na quantidade de itens dentro do Array. count($resultado <=5)
            $novo_num = rand(1,60);
            if(in_array($novo_num, $resultado)) {
                $i--;
            } else {
                $resultado[] = $novo_num;
            }
        }
        //print_r($resultado);
        sort($resultado);
        echo implode(', ', $resultado);
    ?>
</body>
</html>