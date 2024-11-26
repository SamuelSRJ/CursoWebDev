<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções datas</title>
</head>
<body>
    <?php
        // Recupera a data atual / data corrente
        // echo date('d/m/Y h:i');

        // echo '<br>';
        // echo date_default_timezone_get();
        // echo data_default_timezone_set('America/Sao_Paulo');
        // echo '<br>';
        // echo date('d/m/Y h:i');

        $data_inicial = '2024-11-26';
        $data_final = '2024-11-28';

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);

        echo $data_inicial . ' - ' . $time_inicial;
        echo '<br>';
        echo $data_final . ' - ' . $time_final;

        $diferenca_times = abs($time_final - $time_inicial);

        echo '<br>';
        echo 'A diferença de segundos entre a data inicial e data final são: ' .@$diferenca_times. ' segundos';

        $segundos_existem_dia = 24 * 60 * 60;

        echo '<br>';
        echo 'Um dia possui ' . $segundos_existem_dia . ' segundos';

        $diferenca_dias = $diferenca_times / $segundos_existem_dia;

        echo '<br>';
        echo "A diferença em dias é: $diferenca_dias dias";
    ?>
</body>
</html>