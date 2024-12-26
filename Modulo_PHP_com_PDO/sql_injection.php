<?php
    if(!empty($_POST['usuario']) && !empty($_POST['senha'])){
        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $senha = '';

        try {
            $conexao = new PDO($dsn, $usuario, $senha);

            // Query
            $query = "select * from tb_usuarios where ";
            $query .= " email = :usuario ";
            $query .= " AND senha = :senha ";

            $stmt = $conexao->prepare($query);

            $stmt->bindValue(':usuario', $_POST['usuario']);
            $stmt->bindValue(':senha', $POST['senha']);

            $stmt->execute();

            $usuario = $stmt->fetch();

            echo '<pre>';
            print_r($usuario);
            echo '</pre>';

        } catch(PDOException $e) {
            echo 'Erro: '.$e->getCode().'<br>Mensagem: '.$e->getMessage();

        }
    } 

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <form method="post" action="sql_injection.php">
            <input type="text" placeholder="Usuário" name="usuario">
            <br>
            <input type="text" placeholder="Senha" name="senha">
            <br>

            <button type="submit"> Entrar</button>
        </form>
    </body>
</html>