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
    <script src="./assets/js/destaques.js" defer></script>

    <title>Aleafar Boutique</title>
</head>

<body>
    <button id="back-to-top-btn"></button>
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
                    <div class="secao__contatos">
                    </div>
                </ul>
                <i class="fa-solid fa-bars" id="menu__botao" onclick="openMenu()"></i>
            </nav>
            <p class="contatos__login" id="loginCadastroBtn">
                <a href="./pages/login.php" class="contato__link">
                    Login ou Cadastro
                </a>
            </p>
            <p class="contatos__login">
                <a href="#" onclick="logout()" style="display: none;" id="logoutBtn">
                    Logout
                </a>
            </p>
        </section>
    </header>
    <!-- Fim do cabecalho -->

    <!-- Inicio informações -->
    <section class="secao__info">
        <figure class="secao__info-figure">
            <source srcset="https://i.imgur.com/bLUJAfr.jpeg" type="image/webp">
            <img src="https://i.imgur.com/cF5Cpzl.png" alt="Roupas no cabide" class="info__figure-img" />
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
            <section class="container__destaque" id="destaquesContainer">

            </section>
            <div class="botao__destaque-container">
                <a href="./pages/produtos.php" class="destaque__botao">Ver todos os produtos</a>
            </div>
        </section>
        <!-- Fim dos destaques -->

        <!-- inicio promoções -->
        <section class="promocao__container">
            <h2 class="promocao__titulo">História da Marca</h2>
            <!-- texto -->
            <p class="promocao__texto">
                A Aleafar Boutique é o fruto do sonho e da determinação de uma jovem empreendedora que decidiu
                transformar sua paixão por moda em um negócio próspero. Nascida em setembro de 2022, nossa boutique
                online é muito mais do que um simples comércio de roupas e acessórios femininos; é o resultado de
                dedicação, estilo e autenticidade.
            </p>
            <p class="promocao__texto">
                Desde o início, buscamos oferecer às nossas clientes uma experiência única de compra, onde a elegância
                se encontra com a modernidade. Cada peça cuidadosamente selecionada reflete não apenas as tendências do
                momento, mas também a essência da mulher contemporânea, forte, decidida e apaixonada pela moda.
            </p>
            <p class="promocao__texto">
                Acreditamos que a moda vai além das roupas; é uma expressão de individualidade e confiança. Na Aleafar
                Boutique, não apenas vendemos produtos, mas ajudamos cada mulher a contar sua própria história por meio
                do estilo. Nosso compromisso é proporcionar qualidade, conforto e, acima de tudo, empoderamento.

                Junte-se a nós nessa jornada de moda e autenticidade. Explore nossa coleção e descubra como a Aleafar
                Boutique está redefinindo o significado de estilo feminino.
            </p>
            <!-- Fim do texto -->
        </section>
        <!-- Fim das informações -->
    </main>

    <!-- Começo dos feedbacks -->
    <article class="feedback__container">
        <h2 class="feedback__titulo">Feedbacks</h2>
        <div class="images__container">
            <figure class="feedback__container-figure">
                <img src="https://i.imgur.com/tnwx1hT.jpg" alt="feedback cliente satisfeito"
                    class="feedback__figure-img">
            </figure>
            <figure class="feedback__container-figure">
                <img src="https://i.imgur.com/sJbvK8a.jpg" alt="feedback cliente satisfeito"
                    class="feedback__figure-img">
            </figure>
            <figure class="feedback__container-figure">
                <img src="https://i.imgur.com/8f6AEqL.jpg" alt="feedback cliente satisfeito"
                    class="feedback__figure-img">
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Verifica se há dados salvos no localStorage

            const savedEmailCliente = localStorage.getItem('savedEmailCliente');
            const savedSenhaCliente = localStorage.getItem('savedSenhaCliente');

            const loginCadastroBtn = document.getElementById('loginCadastroBtn');
            const logoutBtn = document.getElementById('logoutBtn');

            console.log(savedEmailCliente);
            console.log(savedSenhaCliente);

            if (savedEmailCliente && savedSenhaCliente) {
                // Se o usuário estiver logado, esconde o botão de login/cadastro e mostra o link de logout
                loginCadastroBtn.style.display = 'none';
                logoutBtn.style.display = 'inline';
            }
        });

        function logout() {
            // Remove os dados do localStorage
            localStorage.removeItem('savedEmailCliente');
            localStorage.removeItem('savedSenhaCliente');

            location.reload();
        }
    </script>

</body>

</html>