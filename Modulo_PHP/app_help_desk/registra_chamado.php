<?php
    session_start();

    // Estamos trabalhando na montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    // DESAFIO
    // Fazer o uso do implode('#', $_POST);

    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    // Abrindo o arquivo
    $arquivo = fopen('/Applications/XAMPP/app_help_desk/arquivo.hd', 'a');
    // Escrevendo o texto
    fwrite($arquivo, $texto);
    // Fechando o arquivo
    fclose($arquivo);

    // echo $texto;
    header('Location: abrir_chamado.php');
?>