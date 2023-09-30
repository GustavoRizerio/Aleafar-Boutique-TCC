<?php

include_once('../../../config/config.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM subcategoria WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome_subcatg = $user_data['nome_subcatg'];
            $descricao = $user_data['descricao'];
        }
    } else {
        header('Location: ../frontend/subcategoria/subcategoria.php');
    }
} else {
    header('Location: ../frontend/subcategoria/subcategoria.php');
}

