<?php

if (!empty($_GET['id'])) {
    include_once('../../../config/config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT *  FROM tamanho WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM tamanho WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
}
header('Location: ../../frontend/tamanho/tamanho.php');

