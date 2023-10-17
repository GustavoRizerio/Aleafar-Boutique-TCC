<?php
include_once('../../../config/config.php');

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $img = $_POST["img"];
    $nome_produto = $_POST["nome_produto"];
    $descricao = $_POST["descricao"];
    $estoque = $_POST["estoque"];
    $valorvenda = $_POST["valorvenda"];
    $img2 = $_POST["img2"];
    $img3 = $_POST["img3"];
    $cor = $_POST["cor"];
    $cor2 = $_POST["cor2"];
    $cor3 = $_POST["cor3"];

    // Atualizar dados no banco de dados
    $sqlInsert = "UPDATE produtos
        SET img = '$img',
        nome_produto = '$nome_produto',
        descricao = '$descricao',
        estoque = '$estoque',
        valorvenda = '$valorvenda',
        img2 = '$img2',
        img3 = '$img3',
        cor =  '$cor',
        cor2 =  '$cor2',
        cor3 =  '$cor3'
        WHERE id = $id";
    $result = $conexao->query($sqlInsert);

    if ($result) {
        // Atualizar dados no arquivo JSON
        $jsonFile = '../../../config/json/dados.json';
        $fileData = json_decode(file_get_contents($jsonFile), true);

        foreach ($fileData['produtos'] as $key => $entry) {
            if ($entry['productId'] == $id) {
                // Atualizar os dados no array do JSON
                $fileData['produtos'][$key]['productName'] = $nome_produto;
                $fileData['produtos'][$key]['productDescription'] = $descricao;
                $fileData['produtos'][$key]['productEstoque'] = $estoque;
                $fileData['produtos'][$key]['productPrice'] = $valorvenda;
                $fileData['produtos'][$key]['productImg'] = $img;
                $fileData['produtos'][$key]['productImg2'] = $img2;
                $fileData['produtos'][$key]['productImg3'] = $img3;
                $fileData['produtos'][$key]['productColor'] = $cor;
                $fileData['produtos'][$key]['productColor2'] = $cor2;
                $fileData['produtos'][$key]['productColor3'] = $cor3;

                // Adiciona a opção JSON_PRETTY_PRINT para formatar o JSON
                file_put_contents($jsonFile, json_encode($fileData, JSON_PRETTY_PRINT));

                break;
            }
        }

        echo "Atualização bem-sucedida.";
    } else {
        echo "Erro na atualização: " . $conexao->error;
    }
}

header('Location: ../../frontend/produtos/produtos.php');