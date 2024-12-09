<?php
    session_start();

    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre'>;

    // // Remover indicer do array de sessão
    // // unset()

    // unset($_SESSION['x']); // Para remover o indice se existir

    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre'>;

    // // Destruir a variável de sessão
    // // session_destroy()

    // session_destroy(); // Será destruída

    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre'>;

    session_destroy();
    header('Location: index.php');
?>