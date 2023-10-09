<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | aleafar boutique</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <section>
        <div class="container">
            <div class="usuario container__cadastro">
                <div class="container__formulario">
                    <form action="../backend/fomulario.php" method="POST">
                        <h2>Crie sua conta</h2>
                        <input type="text" name="nome" id="nome" placeholder="Nome" required />
                        <label for="subcategoria">sexo:</label>
                        <select name="sexo" required>
                            <?php
                            include_once(__DIR__ .'../../../config/config.php');
                            
                            // Realiza a inserção na tabela de categoria
                            $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
                            
                            if ($conn->connect_error) {
                                die("Erro na conexão: " . $conn->connect_error);
                            }
                            
                            $sqlsexo = "SELECT id, sexo FROM sexo";
                            $resultsexo = $conn->query($sqlsexo);
                            
                            if ($resultsexo->num_rows > 0) {
                                while ($rowsexo = $resultsexo->fetch_assoc()) {
                                    echo "<option value='" . $rowsexo["id"] . "'>" . $rowsexo["sexo"] . "</option>";
                                }
                            } else {
                                echo "<option value=''>Nenhuma sexo encontrada</option>";
                            }
                            
                            $conn->close();
                            ?>
                        </select>
                        <input type="text" name="email" id="email" placeholder="Email" required />
                        <input type="tel" name="fone" id="fone" placeholder="Telefone" required oninput="limitaTelefone()" maxlength="11"/>
                        <input type="password" name="senha" id="senha" placeholder="Senha" required />
                        <input type="submit" name="submit" id="submit" value="Cadastro" />
                        <p class="conta__botao">
                            Ja tem uma conta ?
                            <a href="login.php">Faça login.</a>
                        </p>
                    </form>
                </div>
                <div class="container__img"><img src="./img/selfie2.jpg" alt="" style="width: 100%;"/></div>
            </div>
        </div>
    </section>

    <script src="./usuarios/usuarios.js"> </script>
</body>

</html>