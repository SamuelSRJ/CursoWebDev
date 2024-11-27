<?php
    // Variavel de autenticação
    $usuarop_autenticado = false;

    // Usuarios do Sistema
    $usuarios_app = array(
        array('email' => 'admin@teste.com.br', 'senha' => 'admin'),
        array('email' => 'user@teste.com.br', 'senha' => 'user')
    );

    foreach($usuarios_app as $user) {
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuarop_autenticado = true;
        }
    }

    if($usuarop_autenticado) {
        echo 'Usuário autenticado!';
    } else {
        echo 'Falha na autenticação do usuário!';
    }
//     print_r($_GET);

//     echo '<br>';

//     echo $_GET['email'];
//     echo '<br>';
//     echo $_GET['senha'];

    // print_r($_POST);

    // echo '<br>';

    // echo $_POST['email'];
    // echo '<br>';
    // echo $_POST['senha'];
?>