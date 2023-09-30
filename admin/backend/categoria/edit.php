<?php

include_once('../../../config/config.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM categoria WHERE ID_categoria=$id";
    $result = $conexao->query($sqlSelect);
    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data['nome'];
        }
    } else {
        header('Location: ../frontend/categoria/categoria.php');
    }
} else {
    header('Location: ../frontend/categoria/categoria.php');
}
