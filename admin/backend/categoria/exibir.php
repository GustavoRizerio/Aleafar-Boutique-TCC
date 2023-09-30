<?php

include_once('../../../config/config.php');

if (!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sql = "SELECT c.*, s.*
        FROM categoria c
        LEFT JOIN subcategoria s ON c.id_subcatg = s.id
        WHERE c.ID_categoria LIKE '%$data%' OR c.nome LIKE '%$data%' OR s.nome_subcatg LIKE '%$data%'
        ORDER BY c.ID_categoria DESC";
} else {
        $sql = "SELECT c.*, s.*
        FROM categoria c
        LEFT JOIN subcategoria s ON c.id_subcatg = s.id";
}


$result = $conexao->query($sql);

