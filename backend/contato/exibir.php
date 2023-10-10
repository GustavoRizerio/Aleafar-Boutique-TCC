<?php
include_once('../../config/config.php');

if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM contato WHERE id LIKE '%$data%' ORDER BY id DESC";
} else {
    $sql = "SELECT * FROM contato ORDER BY id DESC";
}

$result = $conexao->query($sql);

