<?php

include_once('../../../config/config.php');

if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT c.*, s.*
            FROM cliente c
            LEFT JOIN sexo s ON c.id_sexo = s.id
            WHERE c.id LIKE '%$data%' OR c.nome LIKE '%$data%' OR s.id LIKE '%$data%'
            ORDER BY c.id DESC";
} else {
    $sql = "SELECT c.*, s.*
    FROM cliente c
    LEFT JOIN sexo s ON c.id_sexo = s.id";
}


$result = $conexao->query($sql);

