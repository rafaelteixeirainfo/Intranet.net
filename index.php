<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>

</head>

<body id="principal">

    <div id="login">

        <div class="caixa">
            
            <img src="img/solor.jpg" alt="">
            <h1>Acesse sua conta</h1>
            <form action="" method="POST">


            <label></label>
            <div class="email">
                <input type="email" name="email">
            </div>

            <div class="senha">
                <input type="text" name="senha">
            </div>

            <div class="entrar">
                <p>Ainda não tem uma conta? <a href="cadastro.html">Crie uma.</a></p>
                <input type="submit" value="Entrar">
            </div>

        </div>

    </div>
    
</body>

</html>