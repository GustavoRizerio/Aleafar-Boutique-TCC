<?php

include_once('../../../config/config.php');

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idcatg = $_POST["id_catg"];
    $idtamanho = $_POST["id_tamanho"];
    $img = $_POST["img"];
    $nome_produto = $_POST["nome_produto"];
    $descricao = $_POST["descricao"];
    $estoque = $_POST["estoque"];
    $valorvenda = $_POST["valorvenda"];

    $sqlProdutos = "INSERT INTO produtos (id_catg, id_tamanho, img, nome_produto, descricao, estoque, valorvenda) 
    VALUES ('$idcatg', '$idtamanho', '$img', '$nome_produto', '$descricao', '$estoque', '$valorvenda' )";
    if ($conexao->query($sqlProdutos) === TRUE) {
        header('Location: ../../frontend/produtos/produtos.php');
    } else {
        echo "Erro ao cadastrar Produto: " . $conexao->$error;
    }

    $conexao->close();
}
