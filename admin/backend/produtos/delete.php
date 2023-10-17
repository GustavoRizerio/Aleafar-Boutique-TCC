<?php

if (!empty($_GET['id'])) {
    include_once('../../../config/config.php');

    $id = $_GET['id'];

    // 1. Obter os dados do registro antes de excluí-lo.
    $sqlSelect = "SELECT * FROM produtos WHERE id=$id";
    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // mensagem de depuração
        echo "Registro a ser removido do banco de dados. ID: $id<br>";

        //Excluir o registro do banco de dados.
        $sqlDelete = "DELETE FROM produtos WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);

        if ($resultDelete === true) {
            // Abrir o arquivo JSON, encontrar a entrada correspondente e removê-la.
            $jsonFile = '../../../config/json/dados.json';
            $fileData = json_decode(file_get_contents($jsonFile), true);

            //mensagem de depuração
            echo "Conteúdo do JSON antes da remoção:<br>";
            var_dump($fileData);

            foreach ($fileData['produtos'] as $key => $entry) {
                if ($entry['productId'] == $row['ID']) {
                    // Remover a entrada correspondente do array
                    unset($fileData['produtos'][$key]);
            
                    // Reindexar o array
                    $fileData['produtos'] = array_values($fileData['produtos']);
            
                    // Adicionando mensagens de depuração
                    echo "Registro removido do JSON. ID: $id<br>";
                    var_dump($fileData);  // Mostrar o array após a remoção
            
                    break;
                }
            }

            //Salvar o arquivo JSON modificado.
            if (is_array($fileData['produtos'])) {
                file_put_contents($jsonFile, json_encode($fileData, JSON_PRETTY_PRINT));
                echo "JSON atualizado e salvo.<br>";
            } else {
                echo "Erro: O array de produtos não é válido.<br>";
            }

            // Mensagem de depuração
            echo "JSON atualizado e salvo.<br>";
        } else {
            echo "Erro ao excluir do banco de dados: " . $conexao->error;
        }
    }
}

header('Location: ../../frontend/produtos/produtos.php');