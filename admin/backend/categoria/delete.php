<?php

if (!empty($_GET['id'])) {
    include_once('../../../config/config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT *  FROM categoria WHERE ID_categoria=$id";

    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM categoria WHERE ID_categoria=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
}
header('Location: ../../frontend/categoria/categoria.php');

