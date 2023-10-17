<?php

include_once(__DIR__ . '../../../../config/config.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM produtos WHERE id=$id";
    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $img = $user_data["img"];
            $nome_produto = $user_data["nome_produto"];
            $descricao = $user_data["descricao"];
            $estoque = $user_data["estoque"];
            $valorvenda = $user_data["valorvenda"];
            $img2 = $user_data["img2"];
            $img3 = $user_data["img3"];
            $cor = $user_data["cor"];
            $cor2 = $user_data["cor2"];
            $cor3 = $user_data["cor3"];
        }
    } else {
        header('Location: ../frontend/produtos/produtos.php');
    }
} else {
    header('Location: ../frontend/produtos/produtos.php');
}

// Se o formulário for enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Atualizar dados no banco de dados
    $newNomeProduto = $_POST['new_nome_produto'];
    // Adicione outras variáveis que você deseja atualizar

    $sqlUpdate = "UPDATE produtos SET nome_produto='$newNomeProduto' WHERE id=$id";
    $resultUpdate = $conexao->query($sqlUpdate);

    if ($resultUpdate === true) {
        // Atualizar dados no arquivo JSON
        $jsonFile = '../../../config/json/dados.json';  // Ajuste o caminho conforme necessário
        $fileData = json_decode(file_get_contents($jsonFile), true);

        foreach ($fileData['produtos'] as $key => $entry) {
            if ($entry['productId'] == $id) {
                // Atualizar os dados no array
                $fileData['produtos'][$key]['productName'] = $newNomeProduto;
                // Adicione outras variáveis que você deseja atualizar no JSON

                // Adiciona a opção JSON_PRETTY_PRINT para formatar o JSON
                file_put_contents($jsonFile, json_encode($fileData, JSON_PRETTY_PRINT));

                break;
            }
        }

        header('Location: ../frontend/produtos/produtos.php');
    } else {
        echo "Erro ao atualizar Produto: " . $conexao->error;
    }

    $conexao->close();
}
 
