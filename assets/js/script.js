//Side menu para celular
let sideMenu = document.getElementById("side__menu");
let openBtn = document.getElementById("menu__botao");
let closeBtn = document.getElementById("botao__fechar");

function openMenu() {
    sideMenu.style.right = '0px';
};

function closeMenu() {
    sideMenu.style.right = '-400px';
};

//Fecha o menu quando clica fora dele
document.addEventListener('click', function (event) {
    let isClickInsideMenu = sideMenu.contains(event.target);
    let isClickInsideMenuToggle = openBtn.contains(event.target);
    if (!isClickInsideMenu && !isClickInsideMenuToggle) {
        closeMenu();
    } else {
        openMenu();
    }
});

//Fecha o menu quando clica no X
document.addEventListener('click', function (event) {
    let isClickOnMenuX = closeBtn.contains(event.target);
    if (isClickOnMenuX) {
        closeMenu();
    }
});

//Back to Top button
document.addEventListener('DOMContentLoaded', function() {
    const backToTopButton = document.getElementById('back-to-top-btn');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    });

backToTopButton.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});


