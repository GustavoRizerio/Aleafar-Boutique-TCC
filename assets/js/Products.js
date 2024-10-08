async function loadprodutos() {
    const produtos = await getprodutos();
    produtos.forEach(e => {
        const stringDoc = `
        <div class="card">
            <div class="container__imagem">
                <img src=${e.productImg} class="imagem__teste" style="height: 300px;">
            </div>
            <div class="container__informacoes">
                <h3>${e.productName}</h3>
                <h2 class="preco">R$${e.productPrice}</h2>
                <a class="comprar" id="buy_${e.productId}">Comprar Agora</a>
                <i class="fas fa-shopping-cart add-to-cart" id="cart_${e.productId}"></i>
            </div>
        </div>`

        const range = document.createRange().createContextualFragment(stringDoc)
        document.getElementById('produtosContainer').appendChild(range)
        document.querySelector(`#buy_${e.productId}`).addEventListener('click', async () => {
            await buyProduct(e)
        })
        document.querySelector(`#cart_${e.productId}`).addEventListener('click', async () => {
            addToCart(e);
        });
    })


    console.log(produtos);
}

async function buyProduct(p) {
    const stringDoc = `	
    <a class="link__voltar" id="closeProduct">
        <i class="fa-solid fa-arrow-left fa-xl" style="color: #000;"></i>
    </a>
    <section class='product__Section'>
        <div class="section-fluid-main">
            <div class="section-product-page">
                <div class="info-wrap mob-margin">
                    <h2 class="product-page">${p.productName}</h2>
                    <h4 class="product-page">R$${p.productPrice}</h4>
                    <div class="section-fluid">
                    <input class="desc-btn" type="radio" id="desc-1" name="desc-btn" checked />
                    <label for="desc-1">Descrição</label>
                    <div class="section-fluid desc-sec accor-1">
                    <p style='font-size: 15px; font-weight: 800;'>${p.productDescription}</p>
                </div>
            </div>
            <h5 class="product-page">Escolha uma cor:</h5>
        </div>
        <div class="clearfix"></div>
            <input class="color-btn for-color-1" type="radio" id="color-1" name="color-btn" checked />
            <label class="first-color" for="color-1" style="background-color: ${p.productColor}"></label>
            <input class="color-btn for-color-2" type="radio" id="color-2" name="color-btn" />
            <label class="color-2" for="color-2" style="background-color: ${p.productColor2}"></label>
            <input class="color-btn for-color-3" type="radio" id="color-3" name="color-btn" />
            <label class="color-3" for="color-3" style="background-color: ${p.productColor3}"></label>
        <div class="clearfix"></div>
            <div class="info-wrap">
                <a class="btn-product-page" onclick="generateLink('Olá Aleafar Boutique! Estou interessado(a) no seguinte item: *${p.productName}*', '+5511977336964')">Comprar Agora</a>
                
            </div>
            <div class="img-wrap chair-1" style="background-image: url(${p.productImg})"></div>
            <div class="img-wrap chair-2" style="background-image: url(${p.productImg2})"></div>
            <div class="img-wrap chair-3" style="background-image: url(${p.productImg3})"></div>
            <div class="back-color" style='overflow: hidden; height: 200px'></div>
            <div class="back-color chair-2"></div>
            <div class="back-color chair-3"></div>
        </div>
    </div>
    </section>`

    const range = document.createRange().createContextualFragment(stringDoc)
    console.log(range);
    const rangeContainer = document.createElement('span');
    rangeContainer.classList.add('product-visible');
    rangeContainer.appendChild(range);
    document.querySelector('.product__Container').appendChild(rangeContainer);

    hideElements();

    document.querySelector('#closeProduct').addEventListener('click', () => {
        document.querySelector('.product__Container').removeChild(rangeContainer);
        // Mostra novamente os elementos quando o produto é fechado
        showElements();
    });


}

async function getprodutos() {
    return await fetch('http://localhost:3000/produtos').then(r => r.json())
}

document.addEventListener('DOMContentLoaded', e => {
    loadprodutos()
})
