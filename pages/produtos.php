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
    <link rel="stylesheet" href="../assets/css/paginaDeProdutos/Produto.css">

    <script src="https://kit.fontawesome.com/5cb800ca59.js" crossorigin="anonymous"></script>
    <script src="../assets/js/Products.js" defer></script>

    <style>
        .product-visible .pesquisa__barra,
        .product-visible .produtos__titulo,
        .product-visible .cabecalho {
            display: none;
        }
    </style>
</head>

<body>
    <button id="back-to-top-btn"></button>
    <!-- Cabecalho -->
    <header class="cabecalho hide-on-product">
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

    <div class="pesquisa__barra hide-on-product">
        <div class="pesquisa">
            <form class="pesquisa__form">
                <input type="text" class="pesquisa__texto" placeholder="Pesquisar">
                <button type="submit" class="pesquisa__botao">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </div>

    <h1 class="produtos__titulo hide-on-product">Produtos</h1>

    <div class="produtos__container hide-on-product" id="produtosContainer" style='overflow: hidden;'>
        <!-- conteudo da pagina de produtos gerado por javascript -->
    </div>

    <!-- Insta -->
    <div class="hide-on-product">
        <?php
        include_once '../includes/insta.php'
            ?>
    </div>

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