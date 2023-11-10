<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow">
    <meta name="description" content="e-commerce de roupas femininas">
    <meta name="keywords" content="roupas, mulher, rosa, e-commerce">
    <meta name="author" content="ForEich">
    <title>Contato</title>

    <!-- icone da pagina -->
    <link rel="shortcut icon" href="../../assets/img/icon-tcc.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components/cabecalho/cabecalho.css">
    <link rel="stylesheet" href="../assets/css/components/botaoTopo/botaoTopo.css">
    <link rel="stylesheet" href="../assets/css/Contato/contato.css">
    <link rel="stylesheet" href="../assets/css/components/rodape/rodape.css">

    <script src="https://kit.fontawesome.com/5cb800ca59.js" crossorigin="anonymous"></script>
</head>

<body>
    <button id="back-to-top-btn"></button>
    <!-- Cabecalho -->
    <header class="cabecalho">
        <section class="cabecalho__secao">
            <figure class="secao__figure">
                <img src="../assets/img/LogoTcc.png" alt="" class="secao__img">
            </figure>
            <nav class="secao__navegacao">
                <ul class="navegacao__lista" id="side__menu">
                    <li class="navegacao__lista-item">
                        <a href="../index.php" class="navegacao__lista-link">Inicio</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="./produtos.php" class="navegacao__lista-link">Produtos</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="contato.php" class="navegacao__lista-link linkselect">Contato</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="./comoComprar.php" class="navegacao__lista-link">Como Comprar</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="./perguntas.php" class="navegacao__lista-link">Perguntas Frequentes</a>
                    </li>
                    <i class="fa-solid fa-xmark" id="botao__fechar"></i>
                </ul>
                <i class="fa-solid fa-bars" id="menu__botao" onclick="openMenu()"></i>
            </nav>
            <?php
            include_once '../includes/carrinho.php'
            ?>
        </section>
    </header>

    <div class="container">
        <h2 class="titulo">Contato</h2>
        <form id="contact" action="../backend/contato/cadastro.php" method="post">
            <fieldset>
                <input placeholder="Seu nome" type="text" tabindex="1" name="nome" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Endereço de email" type="email" name="email" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="Número de telefone" type="tel" name="telefone" tabindex="3" required pattern="[0-9]{10,14}" maxlength="14">
            </fieldset>
            <fieldset>
                <textarea placeholder="Escreva sua mensagem aqui...." class="teste" name="mensagem" tabindex="5" required></textarea>
            </fieldset>
            <fieldset class="fieldButton">
                <button name="enivar" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
            </fieldset>
        </form>

        <?php
        include_once '../includes/insta.php'
        ?>

    </div>
    <!-- Insta -->


    <!-- Fim do insta -->

    <!-- Começo footer  -->
    <?php
    include_once '../includes/footer.php'
    ?>
    <!-- Fim do cabecalho -->
    <script src="../assets/js/script.js"></script>
</body>

</html>