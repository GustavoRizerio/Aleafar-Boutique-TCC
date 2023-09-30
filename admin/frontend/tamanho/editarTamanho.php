<?php
include_once('../../backend/tamanho/edit.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="../css/login.css">
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
        <div class="container">
            <div class="usuario container__cadastro">
                <div class="container__formulario">
                    <form action="../../backend/tamanho/saveEdit.php" method="POST">
                        <h2>editar subcategoria</h2>
                        <p>Tamanho:</p>
                        <input type="text" name="tamanho" id="tamanho" placeholder="Tamanho" required value=<?php echo $tamanho; ?>>


                        <input type="hidden" name="id_tamanho" value=<?php echo $id_tamanho; ?>>
                        <input type="submit" name="update" id="submit" class="inputBotao" value="Atualizar">

                        <p class="conta__botao">
                            <a href="./tamanho.php">Voltar.</a>
                        </p>

                    </form>
                </div>
                <div class="container__img"><img src="../img/selfie2.jpg" alt="" style="width: 100%;" /></div>
            </div>
        </div>
    </section>
</body>

</html>