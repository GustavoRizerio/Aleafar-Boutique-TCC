<?php
include_once('../../../config/config.php');

if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM subcategoria WHERE id LIKE '%$data%' or nome_subcatg LIKE '%$data%' ORDER BY id";
} else {
    $sql = "SELECT * FROM subcategoria ORDER BY id";
}

$result = $conexao->query($sql);

