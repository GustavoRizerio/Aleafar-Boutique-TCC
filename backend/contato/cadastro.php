<?php

include_once(__DIR__ . '../../../config/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $sqlCategoria = "INSERT INTO contato(nome, email, telefone, mensagem)
        VALUES ('$nome','$email','$telefone','$mensagem')";

    if ($conexao->query($sqlCategoria) === true) {
        header('Location: ../../pages/contato.php');
    } else {
        echo "Erro ao cadastrar usuário: " . $conexao->error;
    }

}
