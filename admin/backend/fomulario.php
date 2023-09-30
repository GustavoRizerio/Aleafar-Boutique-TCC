<?php

include_once('../../config/config.php');

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idSexo = $_POST["sexo"];
    $nome = $_POST["nome"];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    $sqlCategoria = "INSERT INTO cliente (id_sexo, nome, email, fone, senha) VALUES ('$idSexo', '$nome','$email','$fone','$senha')";
    if ($conexao->query($sqlCategoria) === TRUE) {
        header('Location: ../frontend/login.php');
    } else {
        echo "Erro ao cadastrar usuario: " . $conexao->$error;
    }

    $conexao->close();
}
