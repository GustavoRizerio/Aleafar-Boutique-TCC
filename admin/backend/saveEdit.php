<?php
    // isset -> serve para saber se uma variável está definida
    include_once( __DIR__. '../../../config/config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $fone = $_POST['fone'];
        $senha = $_POST['senha'];

        $sqlUpdate = "UPDATE funcionario
        SET nome='$nome', email='$email', fone='$fone', senha='$senha'
        WHERE id=$id";

        $result = $conexao->query($sqlUpdate);

    }
    header('Location: ../frontend/usuarios/usuarios.php');
