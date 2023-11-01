<?php

include_once('../../../config/config.php');

if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM sexo WHERE id LIKE '%$data%' or sexo LIKE '%$data%' ORDER BY id";
} else {
    $sql = "SELECT * FROM sexo ORDER BY id";
}

$result = $conexao->query($sql);
