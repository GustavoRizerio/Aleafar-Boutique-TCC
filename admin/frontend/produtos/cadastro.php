<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | aleafar boutique</title>
    <link rel="stylesheet" href="./style.css">

    <style>
        option.category {
            font-weight: bold;
        }
    </style>

</head>

<body>
    <section>
        <div class="container" style="height: 600px; width: 1000px;">
            <div class="usuario container__cadastro">
                <div class="container__formulario">
                    <form action="../../backend/produtos/cadastro.php" method="POST">
                        <h2>Cadastro Produtos</h2>
                        <input type="text" name="nome_produto" id="nome_produto" placeholder="Nome" required />
                        <input type="text" name="img" id="img" placeholder="Link da imagem" required />
                        <input type="text" name="img2" id="img2" placeholder="Link da imagem" required />
                        <input type="text" name="img3" id="img3" placeholder="Link da imagem" required />
                        <label for="">Cores:</label>
                        <input type="color" name="cor" id="cor" placeholder="cor" required style="padding: 5px;" />
                        <input type="color" name="cor2" id="cor2" placeholder="cor" required style="padding: 5px;" />
                        <input type="color" name="cor3" id="cor3" placeholder="cor" required style="padding: 5px;" />
                        <input type="text" name="descricao" id="descricao" placeholder="Descricao" required />
                        <input type="text" name="estoque" id="estoque" placeholder="Estoque" required />
                        <input type="text" name="valorvenda" id="valorvenda" placeholder="Valor de venda" required />

                        <label for="id_catg">Categoria e subcategoria:</label>
                        <select name="id_catg" id="id_catg" required>
                            <?php
                            include_once '../../../config/config.php';

                            $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

                            if ($conn->connect_error) {
                                die("Erro na conexão: " . $conn->connect_error);
                            }

                            $sqlcategoria = "SELECT ID_categoria, nome, id_subcatg FROM categoria";
                            $resultcategoria = $conn->query($sqlcategoria);

                            if ($resultcategoria->num_rows > 0) {
                                while ($rowcategoria = $resultcategoria->fetch_assoc()) {
                                    $categoriaLabel = $rowcategoria["nome"] . ":";
                                    $subcategoria = obterNomeSubcategoria($rowcategoria["id_subcatg"], $conn);

                                    $categoriaClass = "category";

                                    echo "<option value='" . $rowcategoria["ID_categoria"] . "' data-subcategoria='" . $rowcategoria["id_subcatg"] . "' class='$categoriaClass'>" . $categoriaLabel . " " . $subcategoria . "</option>";
                                }
                            } else {
                                echo "<option value=''>Nenhuma categoria encontrada</option>";
                            }

                            $conn->close();

                            function obterNomeSubcategoria($idSubcategoria, $conexao)
                            {
                                $sql = "SELECT nome_subcatg FROM subcategoria WHERE id = $idSubcategoria";
                                $resultado = $conexao->query($sql);

                                if ($resultado->num_rows > 0) {
                                    $row = $resultado->fetch_assoc();
                                    return $row["nome_subcatg"];
                                } else {
                                    return "Nenhuma subcategoria encontrada";
                                }
                            }
                            ?>
                        </select>

                        <br>
                        <label for="id_tamanho">Tamanho:</label>
                        <select name="id_tamanho" id="id_tamanho" required>
                            <?php

                            include_once '../../backend/config.php';

                            $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

                            if ($conn->connect_error) {
                                die("Erro na conexão: " . $conn->connect_error);
                            }

                            $sqltamanho = "SELECT ID_tamanho, tamanho FROM tamanho";
                            $resulttamanho = $conn->query($sqltamanho);

                            if ($resulttamanho->num_rows > 0) {
                                while ($rowtamanho = $resulttamanho->fetch_assoc()) {
                                    echo "<option value='" . $rowtamanho["ID_tamanho"] . "'>" . $rowtamanho["tamanho"] . "</option>";
                                }
                            } else {
                                echo "<option value=''>Nenhuma tamanho encontrada</option>";
                            }

                            $conn->close();
                            ?>
                        </select>
                        <input type="submit" name="submit" id="submit" value="Cadastro" />
                        <p class="conta__botao">
                            Não quer cadastrar ?
                            <a href="Produtos.php">Voltar.</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>