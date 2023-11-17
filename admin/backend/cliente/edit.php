<?php

include_once('../../../config/config.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM cliente WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $fone = $user_data['fone'];
            $senha = $user_data['senha'];
        }
    } else {
        header('Location: ../../frontend/cliente/cliente.php');
    }
} else {
    header('Location: ../../frontend/cliente/cliente.php');
}
