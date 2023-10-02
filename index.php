<?php
    include_once('./admin/backend/produtos/exibir.php');
?>


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
    <button id="back-to-top-btn" onclick="generateLink('Olá, gostaria de adquirir o produto *nome do produto*' +  ' link do produto: https:/www.tiktok.com/@olympikus00/video/7266709578400664837?_r=1&_t=8f0mxNXfnyH')"></button>
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
                        <a href="./assets/pages/produtos.html" class="navegacao__lista-link">Produtos</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="./assets/pages/contato.html" class="navegacao__lista-link">Contato</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="./assets/pages/comoComprar.html" class="navegacao__lista-link">Como Comprar</a>
                    </li>
                    <li class="navegacao__lista-item">
                        <a href="./assets/pages/perguntas.html" class="navegacao__lista-link">Perguntas Frequentes</a>
                    </li>
                    <i class="fa-solid fa-xmark" id="botao__fechar"></i>
                </ul>
                <i class="fa-solid fa-bars" id="menu__botao" onclick="openMenu()"></i>
            </nav>
            <div class="secao__contatos">
                <p class="contatos__login">
                    <a href="assets/pages/formulario.html" class="contato__link">
                        Login ou Cadastro
                    </a>
                </p>
            </div>
        </section>
    </header>
    <!-- Fim do cabecalho -->

    <!-- Inicio informações -->
    <section class="secao__info">
        <figure class="secao__info-figure">
            <img src="https://i.imgur.com/FCgH5rJ.png" alt="" class="info__figure-img" />
            <img src="https://i.imgur.com/F2FAzLp.jpg" alt="" class="info__figure-img-mobile" />
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
                        <img id="slide-1" src="./assets/img/jaqueta cinza.png" alt="" />
                        <img id="slide-2" src="./assets/img/jaqueta preta.png" alt="" />
                        <img id="slide-3" src="./assets/img/jaqueta cinza.png" alt="" />
                    </div>
                    <div class="destaque__slide-icons">
                        <a href="#slide-1" class="circle__color"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                        <a href="#slide-2" class="circle__color"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                        <a href="#slide-3" class="circle__color"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                    </div>
                </div>
                <div class="destaque__slide">
                    <div class="destaque__slide-img">
                        <img id="slide-4" src="../assets/img/jaqueta cinza.png" alt="" />
                        <img id="slide-5" src="../assets/img/jaqueta preta.png" alt="" />
                        <img id="slide-6" src="../assets/img/jaqueta cinza.png" alt="" />
                    </div>
                    <div class="destaque__slide-icons">
                        <a href="#slide-4"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                        <a href="#slide-5"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                        <a href="#slide-6"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                    </div>
                </div>
                <div class="destaque__slide">
                    <div class="destaque__slide-img">
                        <img id="slide-7" src="../assets/img/jaqueta cinza.png" alt="" />
                        <img id="slide-8" src="../assets/img/jaqueta preta.png" alt="" />
                        <img id="slide-9" src="../assets/img/jaqueta cinza.png" alt="" />
                    </div>
                    <div class="destaque__slide-icons">
                        <a href="#slide-7"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                        <a href="#slide-8"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                        <a href="#slide-9"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                    </div>
                </div>
                <div class="destaque__slide">
                    <div class="destaque__slide-img">
                        <img id="slide-10" src="../assets/img/jaqueta cinza.png" alt="" />
                        <img id="slide-11" src="../assets/img/jaqueta preta.png" alt="" />
                        <img id="slide-12" src="../assets/img/jaqueta cinza.png" alt="" />
                    </div>
                    <div class="destaque__slide-icons">
                        <a href="#slide-10"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                        <a href="#slide-11"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                        <a href="#slide-12"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                    </div>
                </div>
                <div class="destaque__slide">
                    <div class="destaque__slide-img">
                        <img id="slide-13" src="../assets/img/jaqueta cinza.png" alt="" />
                        <img id="slide-14" src="../assets/img/jaqueta preta.png" alt="" />
                        <img id="slide-15" src="../assets/img/jaqueta cinza.png" alt="" />
                    </div>
                    <div class="destaque__slide-icons">
                        <a href="#slide-13"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                        <a href="#slide-14"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                        <a href="#slide-15"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                    </div>
                </div>
                <div class="destaque__slide">
                    <div class="destaque__slide-img">
                        <img id="slide-16" src="../assets/img/jaqueta cinza.png" alt="" />
                        <img id="slide-17" src="../assets/img/jaqueta preta.png" alt="" />
                        <img id="slide-18" src="../assets/img/jaqueta cinza.png" alt="" />
                    </div>
                    <div class="destaque__slide-icons">
                        <a href="#slide-16"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                        <a href="#slide-17"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                        <a href="#slide-18"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                    </div>
                </div>
            </section>
            <div class="botao__destaque-container">
                <a href="./assets/pages/produtos.html" class="destaque__botao">Ver todos os produtos</a>
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
                            <img id="slide-19" src="../assets/img/jaqueta cinza.png" alt="" />
                            <img id="slide-20" src="../assets/img/jaqueta preta.png" alt="" />
                            <img id="slide-21" src="../assets/img/jaqueta cinza.png" alt="" />
                        </div>
                        <div class="destaque__slide-icons">
                            <a href="#slide-19"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                            <a href="#slide-20"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                            <a href="#slide-21"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                        </div>
                    </div>
                    <div class="destaque__slide">
                        <div class="destaque__slide-img">
                            <img id="slide-22" src="../assets/img/jaqueta cinza.png" alt="" />
                            <img id="slide-23" src="../assets/img/jaqueta preta.png" alt="" />
                            <img id="slide-24" src="../assets/img/jaqueta cinza.png" alt="" />
                        </div>
                        <div class="destaque__slide-icons">
                            <a href="#slide-22"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                            <a href="#slide-23"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                            <a href="#slide-24"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                        </div>
                    </div>
                    <div class="destaque__slide">
                        <div class="destaque__slide-img">
                            <img id="slide-25" src="../assets/img/jaqueta cinza.png" alt="" />
                            <img id="slide-26" src="../assets/img/jaqueta preta.png" alt="" />
                            <img id="slide-27" src="../assets/img/jaqueta cinza.png" alt="" />
                        </div>
                        <div class="destaque__slide-icons">
                            <a href="#slide-25"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                            <a href="#slide-26"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                            <a href="#slide-27"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                        </div>
                    </div>
                    <div class="destaque__slide">
                        <div class="destaque__slide-img">
                            <img id="slide-28" src="../assets/img/jaqueta cinza.png" alt="" />
                            <img id="slide-29" src="../assets/img/jaqueta preta.png" alt="" />
                            <img id="slide-30" src="../assets/img/jaqueta cinza.png" alt="" />
                        </div>
                        <div class="destaque__slide-icons">
                            <a href="#slide-28"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                            <a href="#slide-29"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                            <a href="#slide-30"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                        </div>
                    </div>
                    <div class="destaque__slide">
                        <div class="destaque__slide-img">
                            <img id="slide-31" src="../assets/img/jaqueta cinza.png" alt="" />
                            <img id="slide-32" src="../assets/img/jaqueta preta.png" alt="" />
                            <img id="slide-33" src="../assets/img/jaqueta cinza.png" alt="" />
                        </div>
                        <div class="destaque__slide-icons">
                            <a href="#slide-31"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                            <a href="#slide-32"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                            <a href="#slide-33"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                        </div>
                    </div>
                    <div class="destaque__slide">
                        <div class="destaque__slide-img">
                            <img id="slide-31" src="../assets/img/jaqueta cinza.png" alt="" />
                            <img id="slide-32" src="../assets/img/jaqueta preta.png" alt="" />
                            <img id="slide-33" src="../assets/img/jaqueta cinza.png" alt="" />
                        </div>
                        <div class="destaque__slide-icons">
                            <a href="#slide-31"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                            <a href="#slide-32"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                            <a href="#slide-33"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                        </div>
                    </div>
                    <div class="destaque__slide">
                        <div class="destaque__slide-img">
                            <img id="slide-31" src="../assets/img/jaqueta cinza.png" alt="" />
                            <img id="slide-32" src="../assets/img/jaqueta preta.png" alt="" />
                            <img id="slide-33" src="../assets/img/jaqueta cinza.png" alt="" />
                        </div>
                        <div class="destaque__slide-icons">
                            <a href="#slide-31"><i class="fa-solid fa-circle" style="color: #000000"></i></a>
                            <a href="#slide-32"><i class="fa-solid fa-circle" style="color: #ff45d1"></i></a>
                            <a href="#slide-33"><i class="fa-solid fa-circle" style="color: #ff0f0f"></i></a>
                        </div>
                    </div>
                    <div class="destaque__slide">
                        <div class="destaque__slide-img">
                            <img id="slide-31" src="../assets/img/jaqueta cinza.png" alt="" />
                            <img id="slide-32" src="../assets/img/jaqueta preta.png" alt="" />
                            <img id="slide-33" src="../assets/img/jaqueta cinza.png" alt="" />
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
        <div class="insta">
            <h3 class="feedback__titulo-instagram">Siga-nos</h3>
            <figure>
                <a href="https://www.instagram.com/foreich.technologies/" target="_blank"><img
                        src="/assets/img/instagramPinkIcon.png" alt="" class="feedback__instagram-icon"></a>
            </figure>
        </div>
    </article>
    <!-- Fim do feedback -->

    <!-- Rodape -->

        <?php
            include_once './includes/footer.php'
        ?>

    <!-- Fim do rodape -->

    <!-- Js da pagina -->
    <script src="./assets/js/script.js"></script>
    <script src="assets/js/carroussel.js"></script>

    <!-- Teste -->
    <script src="tests/carrousselTest.js"></script>
</body>

</html>