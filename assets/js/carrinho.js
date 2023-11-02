let carrinho = [];

document.getElementById('showCartBtn').addEventListener('click', showCartPopup);

document.addEventListener('DOMContentLoaded', () => {
    carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    updateCartItemCount();
});

document.addEventListener('visibilitychange', () => {
    if (document.visibilityState === 'hidden') {
        // Pausa qualquer intervalo de salvamento existente
        clearInterval(saveInterval);

        // Inicia um novo intervalo de salvamento a cada 5 segundos
        saveInterval = setInterval(() => {
            localStorage.setItem('carrinho', JSON.stringify(carrinho));
        }, 5000);
    } else {
        // Limpa o intervalo de salvamento ao retornar à página
        clearInterval(saveInterval);
    }
});

document.getElementById('showCartBtn').addEventListener('click', () => {
    if (!isCartPopupOpen) {
        // Se o pop-up estiver fechado, mostra o pop-up
        showCartPopup();
    } else {
        // Se o pop-up estiver aberto, apenas atualiza o número de itens
        const cartItemCount = document.getElementById('cartItemCount');
        cartItemCount.textContent = carrinho.length;
    }
});

document.getElementById('showCartBtn').addEventListener('click', showCart);

document.getElementById('buyAllBtn').addEventListener('click', buyAll);

async function loadAndDisplayProducts() {
    await loadprodutos();
    updateCartItemCount();
}

function updateCartItemCount() {
    const cartItemCount = document.getElementById('cartItemCount');
    cartItemCount.textContent = carrinho.length;

    // Salva a quantidade de itens no carrinho no localStorage
    localStorage.setItem('carrinho', JSON.stringify(carrinho));
}

function showCartPopup() {
    const cartPopup = document.getElementById('cartPopup');
    const cartItemCount = document.getElementById('cartItemCount');
    const blurOverlay = document.getElementById('blurOverlay');

    blurOverlay.style.display = 'block';

    cartItemCount.textContent = carrinho.length;

    // Limpa o conteúdo anterior do pop-up
    cartPopup.innerHTML = '';

    const popupTitle = document.createElement('h2');
    popupTitle.textContent = 'Carrinho de Compras';
    cartPopup.appendChild(popupTitle);

    if (carrinho.length === 0) {
        // Se o carrinho estiver vazio, exibe mensagem e não mostra o pop-up
        const emptyCartMessage = document.createElement('p');
        emptyCartMessage.textContent = 'Seu carrinho está vazio.';
        cartPopup.appendChild(emptyCartMessage);
    } else {
        // Adiciona os produtos do carrinho ao pop-up
        carrinho.forEach(product => {
            const productContainer = document.createElement('div');
            productContainer.classList.add('cart-item-container');

            const productInfo = document.createElement('p');
            productInfo.textContent = `${product.productName} - R$${product.productPrice}`;
            productContainer.appendChild(productInfo);

            // Adiciona o botão "Remover"
            const removeBtn = document.createElement('button');
            removeBtn.textContent = 'Remover';
            removeBtn.classList.add('remove-btn'); // Adiciona a classe remove-btn
            removeBtn.addEventListener('click', () => removeProductFromCart(product));
            productContainer.appendChild(removeBtn);

            cartPopup.appendChild(productContainer);
        });

        // Adiciona o botão "Comprar Todos"
        const buyAllBtn = document.createElement('button');
        buyAllBtn.textContent = 'Comprar Todos';
        buyAllBtn.classList.add('buy-all-btn'); // Adiciona a classe buy-all-btn
        buyAllBtn.addEventListener('click', buyAll);
        cartPopup.appendChild(buyAllBtn);
    }

    // Adiciona o botão de fechar
    const closeBtn = document.createElement('button');
    closeBtn.innerHTML = '&times;'; // Define o conteúdo como '×' (código HTML para o símbolo "X")
    closeBtn.classList.add('close-btn');
    closeBtn.addEventListener('click', () => {
        cartPopup.style.display = 'none';
        blurOverlay.style.display = 'none';
    });
    cartPopup.appendChild(closeBtn);

    updateCartItemCount();

    // Exibe o pop-up
    cartPopup.style.display = 'block';
}

function addToCart(product) {
    carrinho.push(product);
    console.log("Produto adicionado ao carrinho:", product);

    updateCartItemCount();

    // Se o pop-up estiver aberto, atualize o pop-up após adicionar o produto
    if (document.getElementById('cartPopup').style.display === 'block') {
        showCartPopup();
    }
}


function removeProductFromCart(product) {
    const index = carrinho.findIndex(item => item.productId === product.productId);

    if (index !== -1) {
        carrinho.splice(index, 1);
        showCartPopup(); // Atualiza o pop-up após remover o item
    }
}


function showCart() {
    console.log("Produtos no Carrinho:", carrinho);
}

function buyAll() {
    if (carrinho.length === 0) {
        console.log("Carrinho vazio. Adicione produtos antes de comprar.");
        return;
    }

    // Construa a mensagem inicial
    let message = "Olá, gostaria de adquirir os seguintes produtos:\n";

    // Variável para armazenar o valor total da compra
    let totalAmount = 0;

    // Concatene os nomes e preços dos produtos no carrinho à mensagem
    carrinho.forEach(product => {
        message += `*${product.productName}*\n`;
        message += `Preço: R$${product.productPrice}\n`;

        // Adicione o preço ao valor total da compra
        totalAmount += parseFloat(product.productPrice);
    });

    // Adicione o link do produto (pode personalizar conforme necessário)
    message += "Link dos produtos: https:/www.tiktok.com/@olympikus00/video/7266709578400664837?_r=1&_t=8f0mxNXfnyH\n";

    // Adicione o valor total ao final da mensagem
    message += `Valor Total: R$${totalAmount.toFixed(2)}`;

    // Gere o link do WhatsApp com o número específico (substitua '5511977336964' pelo número desejado)
    generateLink(message, '551197653-6370');

    // Limpa o carrinho após a criação do link
    carrinho.length = 0;

    // Mostra novamente os elementos após a compra
    showElements();

    showCartPopup();
}

// Função para gerar o link do WhatsApp com número específico
function generateLink(message, phoneNumber) {
    const api = "https://api.whatsapp.com/send";
    const text = encodeURIComponent(message);
    const link = `${api}?phone=${phoneNumber}&text=${text}`;

    // Abre o link no mesmo navegador
    window.location.href = link;

    console.log("Link do WhatsApp:", link);
}

function hideElements() {
    const elementsToHide = document.querySelectorAll('.hide-on-product');
    elementsToHide.forEach(element => {
        element.style.display = 'none';
    });
}

function showElements() {
    const elementsToShow = document.querySelectorAll('.hide-on-product');
    elementsToShow.forEach(element => {
        element.style.display = ''; // Restaura o estilo original
    });
}