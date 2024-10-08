<?php

include_once('../../../config/config.php');

include_once('../../../config/json');

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idcatg = $_POST["id_catg"];
    $idtamanho = $_POST["id_tamanho"];
    $img = $_POST["img"];
    $nome_produto = $_POST["nome_produto"];
    $descricao = $_POST["descricao"];
    $estoque = $_POST["estoque"];
    $valorvenda = $_POST["valorvenda"];
    $img2 = $_POST["img2"];
    $img3 = $_POST["img3"];
    $cor = $_POST['cor'];
    $cor2 = $_POST['cor2'];
    $cor3 = $_POST['cor3'];

    // Inserção no banco de dados
    $sqlProdutos = "INSERT INTO produtos (id_catg, id_tamanho, img, nome_produto, descricao, estoque, valorvenda, img2, img3, cor, cor2, cor3)
    VALUES ('$idcatg', '$idtamanho', '$img', '$nome_produto', '$descricao', '$estoque', '$valorvenda','$img2', '$img3', '$cor', '$cor2', '$cor3' )";
    
    if ($conexao->query($sqlProdutos) === true) {
        // Adição ao arquivo JSON
        $jsonFile = '../../../config/json/dados.json';
        $ID = $conexao->insert_id;

        $data = array(
            'productId' => $ID,
            'id_catg' => $idcatg,
            'id_tamanho' => $idtamanho,
            'productName' => $nome_produto,
            'productDescription' => $descricao,
            'productEstoque' => $estoque,
            'productPrice' => $valorvenda,
            'productImg' => $img,
            'productImg2' => $img2,
            'productImg3' => $img3,
            'productColor' => $cor,
            'productColor2' => $cor2,
            'productColor3' => $cor3
        );

        $fileData = json_decode(file_get_contents($jsonFile), true);
        $fileData['produtos'][] = $data;

        // Adiciona a opção JSON_PRETTY_PRINT para formatar o JSON
        file_put_contents($jsonFile, json_encode($fileData, JSON_PRETTY_PRINT));

        header('Location: ../../frontend/produtos/produtos.php');
    } else {
        echo "Erro ao cadastrar Produto: " . $conexao->error;
    }

    $conexao->close();
}
