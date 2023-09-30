var search = document.getElementById('pesquisar');

search.addEventListener("keydown", function (event) {
    if (event.key === "Enter") {
        searchData();
    }
});

function searchData() {
    window.location = './usuarios.php?search=' + search.value;
}

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
/* 
function mostrarSenha(){
    var inputPass = document.getElementById('senha')
    var btnShowPass = document.getElementById('btn-senha')

    if(inputPass.type === 'password'){
        inputPass.setAttribute('type','text')
        btnShowPass.classList.replace('bi-eye-fill','bi-eye-slash-fill')
    }else{
        inputPass.setAttribute('type','password')
        btnShowPass.classList.replace('bi-eye-slash-fill','bi-eye-fill')
    }
} */



function limitaTelefone() {
    var input = document.getElementById("telefone");
    var valor = input.value.replace(/\D/g, ''); // Remove qualquer coisa que não seja dígito
    var limite = 11;

    if (valor.length > limite) {
        valor = valor.slice(0, limite); // Limita o número de dígitos
    }

    input.value = valor;
}
