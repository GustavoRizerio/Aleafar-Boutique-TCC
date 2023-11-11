let carrinho = [];
let isCartPopupOpen = false;
let saveInterval;


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

function updateCartIcon() {
    const cartItemCount = document.getElementById('cartItemCount');
    cartItemCount.textContent = carrinho.reduce((total, product) => total + product.quantity, 0);

    // Salva a quantidade de itens no carrinho no localStorage
    localStorage.setItem('carrinho', JSON.stringify(carrinho));
}

window.updateCartItemCount = function() {
    const cartItemCount = document.getElementById('cartItemCount');
    cartItemCount.textContent = carrinho.reduce((total, product) => total + product.quantity, 0);

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
        let totalAmount = 0;
        // Adiciona os produtos do carrinho ao pop-up
        carrinho.forEach(product => {
            const productContainer = document.createElement('div');
            productContainer.classList.add('cart-item-container');

            const productInfo = document.createElement('p');
            productInfo.innerHTML = `<strong>${product.productName}</strong> - R$${product.productPrice} - Quantidade: ${product.quantity}`;
            productContainer.appendChild(productInfo);

            // Adiciona o botão "Remover"
            const removeBtn = document.createElement('button');
            removeBtn.textContent = 'Remover';
            removeBtn.classList.add('remove-btn'); // Adiciona a classe remove-btn
            removeBtn.addEventListener('click', () => removeProductFromCart(product));
            productContainer.appendChild(removeBtn);

            totalAmount += product.total;

            cartPopup.appendChild(productContainer);
        });

        // Adiciona o botão "Comprar Todos"
        const buyAllBtn = document.createElement('button');
        buyAllBtn.textContent = 'Comprar Todos';
        buyAllBtn.classList.add('buy-all-btn'); // Adiciona a classe buy-all-btn
        buyAllBtn.addEventListener('click', buyAll);
        cartPopup.appendChild(buyAllBtn);
        
        const totalContainer = document.createElement('div');
        totalContainer.classList.add('total-container');
        totalContainer.textContent = `Total da Compra: R$${totalAmount.toFixed(2)}`;
        cartPopup.appendChild(totalContainer);
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
    // Obtém o ícone do carrinho
    const cartIcon = document.getElementById(`cart_${product.productId}`);

    // Obtém a quantidade máxima do atributo 'data-max'
    const maxQuantity = parseInt(cartIcon.getAttribute('data-max'));

    // Verifica se há estoque suficiente
    if (product.productEstoque > 0) {
        // Clona o objeto do produto para evitar alterar a referência original
        const productClone = { ...product };

        // Reduz a quantidade em estoque
        productClone.productEstoque--;

        // Armazena a quantidade original em estoque
        const existingProduct = carrinho.find(item => item.productId === product.productId);

        if (existingProduct) {
            existingProduct.quantity++;
            existingProduct.total += parseFloat(product.productPrice);
        } else {
            carrinho.push({ ...product, quantity: 1, total: parseFloat(product.productPrice) });
        }
    
        updateCartItemCount();
    
        if (document.getElementById('cartPopup').style.display === 'block') {
            showCartPopup();
        }

        // Atualiza o ícone do carrinho com base no estoque restante
        updateCartIcon(cartIcon, maxQuantity - 1);

        // Se o pop-up estiver aberto, atualiza o pop-up após adicionar o produto
        if (document.getElementById('cartPopup').style.display === 'block') {
            showCartPopup();
        }
    } else {
        console.log("Produto fora de estoque.");
    }
}

function removeProductFromCart(product) {
    const index = carrinho.findIndex(item => item.productId === product.productId);

    if (index !== -1) {
        const removedProduct = carrinho[index];
        
        if (removedProduct.quantity > 1) {
            // Se a quantidade for maior que 1, apenas reduz a quantidade
            removedProduct.quantity--;

            // Subtrai o preço do produto da quantidade reduzida
            removedProduct.total -= parseFloat(removedProduct.productPrice) || 0;
        } else {
            // Caso contrário, remove o produto do carrinho
            carrinho.splice(index, 1);
        }

        // Recalcula o totalAmount após a remoção do produto
        totalAmount = carrinho.reduce((total, product) => total + parseFloat(product.total), 0);

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
    // Variável para armazenar o valor total da compra
    
    // Variável para armazenar a quantidade total de itens
    let totalQuantity = 0;
    
    // Construa a mensagem inicial
    let message = "Olá Aleafar Boutique!\n";
    message += "Estou interessado(a) nos seguintes itens:\n";
    
    let totalAmount = 0;
    
    // Concatene os nomes, preços e quantidades dos produtos no carrinho à mensagem
    carrinho.forEach(product => {
        // Adicione o preço ao valor total da compra
        totalAmount += parseFloat(product.totalPrice) || 0;

        // Adicione a quantidade ao total de quantidades
        totalQuantity += product.quantity;

        totalAmount += product.total;

        // Concatene os detalhes do produto à mensagem
        message += `*${product.productName}*\n`;
        message += `Preço: R$${product.productPrice}\n`;

        // Adicione a quantidade ao detalhe do produto, se for maior que 1
        if (product.quantity > 1) {
            message += `Quantidade: ${product.quantity}\n\n`;
        } else {
            message += "\n";
        }
    });

    // Adicione o valor total e a quantidade total ao final da mensagem
    message += `Quantidade Total: ${totalQuantity}\n`;
    message += `Valor Total: R$${totalAmount.toFixed(2)}`;

    // Gere o link do WhatsApp com o número específico (substitua '5511977336964' pelo número desejado)
    generateLink(message, '+551197733-6964');

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