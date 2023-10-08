<?php

include_once( __DIR__. '../../../../config/config.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM produtos WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $img = $user_data["img"];
            $nome_produto = $user_data["nome_produto"];
            $descricao = $user_data["descricao"];
            $estoque = $user_data["estoque"];
            $valorvenda = $user_data["valorvenda"];
        }
    } else {
        header('Location: ../frontend/produtos/produtos.php');
    }
} else {
    header('Location: ../frontend/produtos/produtos.php');
}
