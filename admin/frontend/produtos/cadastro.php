<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | aleafar boutique</title>
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <section>
        <div class="container">
            <div class="usuario container__cadastro">
                <div class="container__formulario">
                    <form action="../../backend/produtos/cadastro.php" method="POST">
                        <h2>Cadastro Produtos</h2>
                        <input type="text" name="nome_produto" id="nome_produto" placeholder="Nome" required />
                        <input type="text" name="img" id="img" placeholder="Link da imagem" required />
                        <input type="text" name="descricao" id="descricao" placeholder="Descricao" required />
                        <input type="text" name="estoque" id="estoque" placeholder="Estoque" required />
                        <input type="number" name="valorvenda" id="valorvenda" placeholder="Valor de venda" required />

                        <label for="id_catg">Categoria:</label>
                        <select name="id_catg" required>
                            <?php

                            include '../../backend/config.php';
                            
                            // Realiza a inserção na tabela de categoria
                            $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
                            
                            if ($conn->connect_error) {
                                die("Erro na conexão: " . $conn->connect_error);
                            }
                            
                            $sqlcategoria = "SELECT ID_categoria, nome FROM categoria";
                            $resultcategoria = $conn->query($sqlcategoria);
                            
                            if ($resultcategoria->num_rows > 0) {
                                while ($rowcategoria = $resultcategoria->fetch_assoc()) {
                                    echo "<option value='" . $rowcategoria["ID_categoria"] . "'>" . $rowcategoria["nome"] . "</option>";
                                }
                            } else {
                                echo "<option value=''>Nenhuma categoria encontrada</option>";
                            }
                            
                            $conn->close();
                            ?>
                        </select>
                        <br>
                        <label for="id_tamanho">Tamanho:</label>
                        <select name="id_tamanho" required>
                            <?php

                            include '../../backend/config.php';
                            
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
                <div class="container__img"><img src="../img/selfie.jpg" alt="" style="width: 100%;" /></div>
            </div>
        </div>
    </section>
</body>

</html>