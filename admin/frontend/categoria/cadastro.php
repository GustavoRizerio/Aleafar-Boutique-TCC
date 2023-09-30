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
                    <form action="../../backend/categoria/cadastro.php" method="POST">
                        <h2>Cadastre Categoria</h2>
                        <input type="text" name="nomeCategoria" id="nome" placeholder="Nome" required />

                        <label for="subcategoria">Subcategoria:</label>
                        <select name="subcategoria" required>
                            <?php
                            include '../../backend/config.php';
                            
                            // Realiza a inserção na tabela de categoria
                            $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
                            
                            if ($conn->connect_error) {
                                die("Erro na conexão: " . $conn->connect_error);
                            }
                            
                            $sqlSubcategoria = "SELECT id, nome_subcatg FROM subcategoria";
                            $resultSubcategoria = $conn->query($sqlSubcategoria);
                            
                            if ($resultSubcategoria->num_rows > 0) {
                                while ($rowSubcategoria = $resultSubcategoria->fetch_assoc()) {
                                    echo "<option value='" . $rowSubcategoria["id"] . "'>" . $rowSubcategoria["nome_subcatg"] . "</option>";
                                }
                            } else {
                                echo "<option value=''>Nenhuma subcategoria encontrada</option>";
                            }
                            
                            $conn->close();
                            ?>
                        </select>
                        <input type="submit" name="submit" id="submit" value="Cadastro" />
                        <p class="conta__botao">
                            Não quer cadastrar ?
                            <a href="categoria.php">Voltar.</a>
                        </p>
                    </form>
                </div>
                <div class="container__img"><img src="../img/selfie.jpg" alt="" style="width: 100%;" /></div>
            </div>
        </div>
    </section>
</body>

</html>