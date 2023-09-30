<?php
include_once('../../../config/config.php');

if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM tamanho WHERE id_tamanho LIKE '%$data%' or tamanho LIKE '%$data%' ORDER BY id_tamanho DESC";
} else {
    $sql = "SELECT * FROM tamanho ORDER BY id_tamanho DESC";
}

$result = $conexao->query($sql);

