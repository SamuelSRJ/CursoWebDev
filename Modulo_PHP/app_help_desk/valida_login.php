<?php
    session_start();

    // Variavel de autenticação
    $usuario_autenticado = false;

    // Usuarios do Sistema
    $usuarios_app = array(
        array('email' => 'admin@teste.com.br', 'senha' => 'admin'),
        array('email' => 'user@teste.com.br', 'senha' => 'user')
    );

    foreach($usuarios_app as $user) {
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado) {
        echo 'Usuário autenticado!';
        $_SESSION['autenticado'] = 'SIM';
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
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