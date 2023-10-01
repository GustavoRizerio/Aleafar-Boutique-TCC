<?php

include_once(__DIR__ . '../../../../config/config.php');

if (!empty($_GET['search'])) {
        $data = $_GET['search'];

        $sql = "SELECT p.*, c.*, t.*
            FROM produtos p
            LEFT JOIN categoria c ON p.id_catg = c.ID_categoria
            LEFT JOIN tamanho t ON p.id_tamanho = t.ID_tamanho
            WHERE p.ID LIKE ? OR p.img LIKE ? OR p.nome_produto LIKE ? 
            OR p.descricao LIKE ? OR p.estoque LIKE ? OR p.valorvenda LIKE ? 
            OR p.id_catg LIKE ? OR p.id_tamanho LIKE ? 
            ORDER BY c.id DESC";

        
        $stmt = $conexao->prepare($sql);

        
        $searchParam = "%$data%"; 
        $stmt->bind_param("ssssssss", $searchParam, $searchParam, $searchParam, $searchParam, $searchParam, $searchParam, $searchParam, $searchParam);
        $stmt->execute();

        $result = $stmt->get_result();
} else {
        $sql = "SELECT p.*, c.*, t.*
            FROM produtos p
            LEFT JOIN categoria c ON p.id_catg = c.ID_categoria
            LEFT JOIN tamanho t ON p.id_tamanho = t.ID_tamanho";
        $result = $conexao->query($sql);
}

