<?php

if (!empty($_GET['id'])) {
    include_once('../../../config/config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM contato WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if (!$result) {
        die("Erro na consulta SQL: " . $conexao->error);
    }

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM contato WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);

        if (!$resultDelete) {
            die("Erro na exclusão SQL: " . $conexao->error);
        }
    }
}
header('Location: ../../frontend/contato/contato.php');

