<?php

if (!empty($_GET['id'])) {
    include_once( __DIR__. '../../../config/config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT *  FROM funcionario WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM funcionario WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
}
header('Location: ../frontend/usuarios/usuarios.php');

