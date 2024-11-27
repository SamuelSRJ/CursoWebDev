<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach em Arrays</title>
</head>
<body>
    <?php
        $funcionarios = array(
            array('nome' => 'João', 'salario' => 2500),
            array('nome' => 'Maria', 'salario' => 3500),
            array('nome' => 'Julia', 'salario' => 4500)
        );

        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';

        foreach($funcionarios as $idx => $funcionario) {
            foreach($funcionario as $idx2 => $valor){
                echo "$idx2 - $valor <br>";
            }
            echo '<hr>';
        }
    ?>
</body>
</html>