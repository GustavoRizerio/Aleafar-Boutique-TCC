<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow">
    <meta name="description" content="e-commerce de roupas femininas">
    <meta name="keywords" content="roupas, mulher, rosa, e-commerce">
    <meta name="author" content="ForEich Technologies">

    <!-- icone da pagina -->
    <link rel="shortcut icon" href="assets/img/icon-tcc.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/normalize.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/components/cabecalho/cabecalho.css" />
    <link rel="stylesheet" href="./assets/css/components/botaoTopo/botaoTopo.css">
    <link rel="stylesheet" href="./assets/css/PaginaPrincipal/informações/info.css" />
    <link rel="stylesheet" href="./assets/css/PaginaPrincipal/destaques/destaques.css" />
    <link rel="stylesheet" href="./assets/css/PaginaPrincipal/promocao/promocao.css">
    <link rel="stylesheet" href="./assets/css/PaginaPrincipal/carroussel/carroussel.css">
    <link rel="stylesheet" href="./assets/css/PaginaPrincipal/feedback/feedback.css">
    <link rel="stylesheet" href="./assets/css/components/rodape/rodape.css">

    <!-- icons -->
    <script src="https://kit.fontawesome.com/5cb800ca59.js" crossorigin="anonymous"></script>

    <title>Aleafar Boutique</title>
</head>

<body>
    <button id="back-to-top-btn"
        onclick="generateLink('Olá, gostaria de adquirir o produto *nome do produto*' +  ' link do produto: https:/www.tiktok.com/@olympikus00/video/7266709578400664837?_r=1&_t=8f0mxNXfnyH')"></button>
    <!-- Cabecalho -->
    <header class="cabecalho">
        <section class="cabecalho__secao">
            <figure class="secao__figure">
                <img src="./assets/img/LogoTcc.png" alt="" class="secao__img" />
            </figure>
            <nav class="secao__navegacao">
                <ul class="navegacao__lista" id="side__menu">
                    <li class="navegacao__lista-item">
                        <a href="" class="navegacao__lista-link linkselect">Inicio</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="./pages/produtos.php" class="navegacao__lista-link">Produtos</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="./pages/contato.php" class="navegacao__lista-link">Contato</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="./pages/comoComprar.php" class="navegacao__lista-link">Como Comprar</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="./pages/perguntas.php" class="navegacao__lista-link">Perguntas Frequentes</a>
                    </li>
                    <i class="fa-solid fa-xmark" id="botao__fechar"></i>
                </ul>
                <i class="fa-solid fa-bars" id="menu__botao" onclick="openMenu()"></i>
            </nav>
            <!-- <div class="secao__contatos">
                <p class="contatos__login">
                    <a href="./pages/formulario.php" class="contato__link">
                        Login ou Cadastro
                    </a>
                </p>
            </div> -->
        </section>
    </header>
    <!-- Fim do cabecalho -->

    <!-- Inicio informações -->
    <section class="secao__info">
        <figure class="secao__info-figure">
            <source srcset="https://i.imgur.com/FCgH5rJ.png" type="image/webp">
            <img src="./assets/img/desktopCapa.png" alt="Roupas no cabide" class="info__figure-img" />
        </figure>
        <div class="secao__container">
            <div class="secao__container-texto">
                <p class="secao__container-paragrafo">
                    <i class="fa-solid fa-truck-fast"></i>Enviamos suas compras para
                    todo brasil!
                </p>
            </div>
            <div class="secao__container-texto">
                <p class="secao__container-paragrafo">
                    <i class="fa-solid fa-credit-card"></i>Pague com PIX, TED ou CARTÃO
                    DE CRÉDITO
                </p>
            </div>
            <div class="secao__container-texto">
                <p class="secao__container-paragrafo">
                    <i class="fa-solid fa-lock"></i>Compre com segurança, Seus dados
                    sempre protegidos
                </p>
            </div>
        </div>
    </section>
    <!-- Fim das informações -->

    <!-- Inicio dos destaques -->
    <main>
        <section class="secao__destaques">
            <h1 class="destaque__titulo">Destaques</h1>
            <!-- carrossel -->
            <section class="container__destaque">
                <div class="destaque__slide">
                    <div class="destaque__slide-img">
                        <img id="slide-1" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        <img id="slide-2" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        <img id="slide-3" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                    </div>
                    <div class="destaque__slide-icons">
                        <a href="#slide-1" class="circle__color"><i class="fa-solid fa-circle"
                                style="color: #000000"></i></a>
                        <a href="#slide-2" class="circle__color"><i class="fa-solid fa-circle"
                                style="color: #ff45d1"></i></a>
                        <a href="#slide-3" class="circle__color"><i class="fa-solid fa-circle"
                                style="color: #ff0f0f"></i></a>
                    </div>
                </div>
                <div class="destaque__slide">
                    <div class="destaque__slide-img">
                        <img id="slide-4" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        <img id="slide-5" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        <img id="slide-6" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                    </div>
                    <div class="destaque__slide-icons">
                        <a href="#slide-4"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                        <a href="#slide-5"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                        <a href="#slide-6"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                    </div>
                </div>
                <div class="destaque__slide">
                    <div class="destaque__slide-img">
                        <img id="slide-7" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        <img id="slide-8" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        <img id="slide-9" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                    </div>
                    <div class="destaque__slide-icons">
                        <a href="#slide-7"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                        <a href="#slide-8"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                        <a href="#slide-9"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                    </div>
                </div>
                <div class="destaque__slide">
                    <div class="destaque__slide-img">
                        <img id="slide-10" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        <img id="slide-11" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        <img id="slide-12" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                    </div>
                    <div class="destaque__slide-icons">
                        <a href="#slide-10"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                        <a href="#slide-11"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                        <a href="#slide-12"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                    </div>
                </div>
                <div class="destaque__slide">
                    <div class="destaque__slide-img">
                        <img id="slide-13" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        <img id="slide-14" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        <img id="slide-15" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                    </div>
                    <div class="destaque__slide-icons">
                        <a href="#slide-13"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                        <a href="#slide-14"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                        <a href="#slide-15"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                    </div>
                </div>
                <div class="destaque__slide">
                    <div class="destaque__slide-img">
                        <img id="slide-16" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        <img id="slide-17" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        <img id="slide-18" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                    </div>
                    <div class="destaque__slide-icons">
                        <a href="#slide-16"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                        <a href="#slide-17"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                        <a href="#slide-18"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                    </div>
                </div>
            </section>
            <div class="botao__destaque-container">
                <a href="./pages/produtos.php" class="destaque__botao">Ver todos os produtos</a>
            </div>
        </section>
        <!-- Fim dos destaques -->

        <!-- inicio promoções -->
        <section class="promocao__container">
            <h2 class="promocao__titulo">Promoções</h2>
            <!-- carroussel -->
            <section class="carroussel">
                <button class="pre-seta"><img src="assets/img/arrow.png" alt=""></button>
                <button class="nxt-seta"><img src="assets/img/arrow.png" alt=""></button>
                <div class="carroussel-container">
                    <div class="destaque__slide">
                        <div class="destaque__slide-img">
                            <img id="slide-19" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                            <img id="slide-20" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                            <img id="slide-21" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        </div>
                        <div class="destaque__slide-icons">
                            <a href="#slide-19"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                            <a href="#slide-20"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                            <a href="#slide-21"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                        </div>
                    </div>
                    <div class="destaque__slide">
                        <div class="destaque__slide-img">
                            <img id="slide-22" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                            <img id="slide-23" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                            <img id="slide-24" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        </div>
                        <div class="destaque__slide-icons">
                            <a href="#slide-22"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                            <a href="#slide-23"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                            <a href="#slide-24"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                        </div>
                    </div>
                    <div class="destaque__slide">
                        <div class="destaque__slide-img">
                            <img id="slide-25" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                            <img id="slide-26" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                            <img id="slide-27" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        </div>
                        <div class="destaque__slide-icons">
                            <a href="#slide-25"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                            <a href="#slide-26"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                            <a href="#slide-27"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                        </div>
                    </div>
                    <div class="destaque__slide">
                        <div class="destaque__slide-img">
                            <img id="slide-28" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                            <img id="slide-29" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                            <img id="slide-30" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        </div>
                        <div class="destaque__slide-icons">
                            <a href="#slide-28"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                            <a href="#slide-29"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                            <a href="#slide-30"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                        </div>
                    </div>
                    <div class="destaque__slide">
                        <div class="destaque__slide-img">
                            <img id="slide-31" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                            <img id="slide-32" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                            <img id="slide-33" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        </div>
                        <div class="destaque__slide-icons">
                            <a href="#slide-31"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                            <a href="#slide-32"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                            <a href="#slide-33"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                        </div>
                    </div>
                    <div class="destaque__slide">
                        <div class="destaque__slide-img">
                            <img id="slide-31" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                            <img id="slide-32" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                            <img id="slide-33" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        </div>
                        <div class="destaque__slide-icons">
                            <a href="#slide-31"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                            <a href="#slide-32"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                            <a href="#slide-33"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                        </div>
                    </div>
                    <div class="destaque__slide">
                        <div class="destaque__slide-img">
                            <img id="slide-31" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                            <img id="slide-32" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                            <img id="slide-33" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        </div>
                        <div class="destaque__slide-icons">
                            <a href="#slide-31"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                            <a href="#slide-32"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                            <a href="#slide-33"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                        </div>
                    </div>
                    <div class="destaque__slide">
                        <div class="destaque__slide-img">
                            <img id="slide-31" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                            <img id="slide-32" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                            <img id="slide-33" src="https://i.imgur.com/jDXt5p6.png" alt="" />
                        </div>
                        <div class="destaque__slide-icons">
                            <a href="#slide-31"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                            <a href="#slide-32"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                            <a href="#slide-33"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Fim do carrousel -->
        </section>
        <!-- Fim das informações -->
    </main>

    <!-- Começo dos feedbacks -->
    <article class="feedback__container">
        <h2 class="feedback__titulo">Feedbacks</h2>
        <div class="images__container">
            <figure class="feedback__container-figure">
                <img src="assets/img/feedback.jpg" alt="feedback cliente satisfeito" class="feedback__figure-img">
            </figure>
            <figure class="feedback__container-figure">
                <img src="assets/img/feedback.jpg" alt="feedback cliente satisfeito" class="feedback__figure-img">
            </figure>
            <figure class="feedback__container-figure">
                <img src="assets/img/feedback.jpg" alt="feedback cliente satisfeito" class="feedback__figure-img">
            </figure>
        </div>
        
    <!-- Insta -->
    <?php
    include_once './includes/insta.php'
        ?>
    <!-- Fim do insta -->

    </article>
    <!-- Fim do feedback -->

    <!-- Rodape -->

    <?php
    include_once './includes/footer.php'
        ?>

    <!-- Fim do rodape -->

    <!-- Js da pagina -->
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/carroussel.js"></script>

    <!-- Teste -->
    <script src="tests/carrousselTest.js"></script>
</body>

</html>