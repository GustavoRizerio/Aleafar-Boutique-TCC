<?php

include_once('../../../config/config.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM sexo WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $sexo = $user_data['sexo'];
        }
    } else {
        header('Location: ../frontend/sexo/sexo.php');
    }
} else {
    header('Location: ../frontend/sexo/sexo.php');
}

