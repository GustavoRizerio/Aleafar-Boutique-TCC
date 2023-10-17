<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>

    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="shortcut icon" href="../assets/img/LogoTcc.png" />
    <link rel="stylesheet" href="../assets/css/components/cabecalho/cabecalho.css">
    <link rel="stylesheet" href="../assets/css/components/botaoTopo/botaoTopo.css">
    <link rel="stylesheet" href="../assets/css/components/rodape/rodape.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components/instagram/insta.css">
    <link rel="stylesheet" href="../assets/css/produtos/produtos.css">
    <link rel="stylesheet" href="../assets/css/paginaDeProdutos/paginaDeProdutos.css">

    <script src="https://kit.fontawesome.com/5cb800ca59.js" crossorigin="anonymous"></script>
    <script src="../assets/js/loadProducts.js" defer></script>
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
                        <a href="./produtos.php" class="navegacao__lista-link linkselect">Produtos</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="./contato.php" class="navegacao__lista-link">Contato</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="./comoComprar.php" class="navegacao__lista-link">Como Comprar</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="perguntas.php" class="navegacao__lista-link">Perguntas Frequentes</a>
                    </li>
                    <i class="fa-solid fa-xmark" id="botao__fechar"></i>
                </ul>
                <i class="fa-solid fa-bars" id="menu__botao" onclick="openMenu()"></i>
            </nav>
        </section>
    </header>
    <!-- Fim do cabecalho -->

    <div class="pesquisa__barra">
        <div class="pesquisa">
            <form class="pesquisa__form">
                <input type="text" class="pesquisa__texto" placeholder="Pesquisar">
                <button type="submit" class="pesquisa__botao">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </div>

    <h1 class="produtos__titulo">Produtos</h1>

    <div class="produtos__container" id="produtosContainer">
        
    </div>

    <!-- Insta -->

    <?php
        include_once '../includes/insta.php'
    ?>

    <!-- Fim do insta -->

    <!-- Rodape -->

    <?php
        include_once '../includes/footer.php'
    ?>

    <!-- Fim do rodape -->
    <span class="product__Container"></span>
    <!-- Fim do footer -->
    <script src="../assets/js/script.js"></script>
</body>

</html>