<?php

include_once('../../../config/config.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM tamanho WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $tamanho = $user_data['tamanho'];
        }
    } else {
        header('Location: ../frontend/tamanho/tamanho.php');
    }
} else {
    header('Location: ../frontend/tamanho/tamanho.php');
}

