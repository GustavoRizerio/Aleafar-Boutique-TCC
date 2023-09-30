<?php
include_once('../../../config/config.php');

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $img = $_POST["img"];
    $nome_produto = $_POST["nome_produto"];
    $descricao = $_POST["descricao"];
    $estoque = $_POST["estoque"];
    $valorvenda = $_POST["valorvenda"];

    $sqlInsert = "UPDATE produtos
        SET img = '$img',
        nome_produto = '$nome_produto',
        descricao = '$descricao',
        estoque = '$estoque',
        valorvenda = '$valorvenda'
        WHERE id = $id";
    $result = $conexao->query($sqlInsert);

    if ($result) {
        echo "Atualização bem-sucedida.";
    } else {
        echo "Erro na atualização: " . $conexao->error;
    }
}

header('Location: ../../frontend/produtos/produtos.php');
