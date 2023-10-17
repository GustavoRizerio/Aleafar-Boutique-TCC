<?php
include_once('../../backend/produtos/edit.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        p {
            font-size: 13px;
        }

        section .container {
            height: 550px;
        }
    </style>
</head>

<body>
    <section>
        <div class="container" style="height: 600px; width: 1000px;">
            <div class="usuario container__cadastro">
                <div class="container__formulario">
                    <form action="../../backend/produtos/saveEdit.php" method="POST">
                        <h2>Editar produtos</h2>
                        <p>Nome:</p>
                        <input type="text" name="nome_produto" id="nome_produto" placeholder="Nome" required value=<?php echo $nome_produto; ?> />
                        <p>img:</p>
                        <input type="text" name="img" id="img" placeholder="Link da imagem" required value=<?php echo $img; ?>>
                        <p>img2:</p>
                        <input type="text" name="img2" id="img2" placeholder="Link da imagem" required value=<?php echo $img2; ?>>
                        <p>img3:</p>
                        <input type="text" name="img3" id="img3" placeholder="Link da imagem" required value=<?php echo $img3; ?>>
                        <p>Cores:</p>
                        <input type="color" name="cor" id="cor" placeholder="Link da imagem" style="padding: 5px;" required value=<?php echo $cor; ?>>
                        <input type="color" name="cor2" id="cor2" placeholder="Link da imagem" style="padding: 5px;" required value=<?php echo $cor2; ?>>
                        <input type="color" name="cor3" id="cor3" placeholder="Link da imagem" style="padding: 5px;" required value=<?php echo $cor3; ?>>
                        <p>descricao:</p>
                        <input type="text" name="descricao" id="descricao" placeholder="Descricao" required value=<?php echo $descricao; ?>>
                        <p>estoque:</p>
                        <input type="text" name="estoque" id="estoque" placeholder="Estoque" required value=<?php echo $estoque; ?>>
                        <p>valor de venda:</p>
                        <input type="text" name="valorvenda" id="valorvenda" placeholder="Valor de venda" required value=<?php echo $valorvenda; ?>>
                        <input type="hidden" name="id" value=<?php echo $id; ?>>
                        <input type="submit" name="update" id="submit" class="inputBotao" value="Atualizar">
                        <p class="conta__botao">
                            <a href="./produtos.php">Voltar.</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>