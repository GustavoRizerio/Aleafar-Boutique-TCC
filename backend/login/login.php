<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once( __DIR__. '../../../config/config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM cliente WHERE email = '$email' and senha = '$senha'";
        

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: ../../pages/formulario.php');
        }
        else
        {
            //acessa
            $result = mysqli_query($conexao, "INSERT INTO login(email,senha)
            VALUES ('$email','$senha')");
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ../../index.php');
            $usuarioLogado = true;
        }
    }
    else
    {
        // Não acessa
        header('Location: ../../pages/formulario.php');
    }