async function loaddestaques() {
    const destaques = await getdestaques()
    const destaquesContainer = document.getElementById('destaquesContainer');

    destaques.forEach((e, index) => {
        const slideId = `slide-${index + 1}`;
        const img1Id = `${slideId}-img1`;
        const img2Id = `${slideId}-img2`;
        const img3Id = `${slideId}-img3`;

        const stringDoc = `
            <div class="destaque__slide">
                <div class="destaque__slide-img" style="height: 350px;">
                    <img id="${img1Id}" src="${e.productImg}" alt=""/>
                    <img id="${img2Id}" src="${e.productImg2}" alt="" />
                    <img id="${img3Id}" src="${e.productImg3}" alt="" />
                </div>  
                <div class="destaque__slide-icons">
                    <a href="#${img1Id}" class="circle__color"><i class="fa-solid fa-circle"
                            style="color: ${e.productColor}"></i></a>
                    <a href="#${img2Id}" class="circle__color"><i class="fa-solid fa-circle"
                            style="color: ${e.productColor2}"></i></a>
                    <a href="#${img3Id}" class="circle__color"><i class="fa-solid fa-circle"
                            style="color: ${e.productColor3}"></i></a>
                </div>
            </div>`;

        const range = document.createRange().createContextualFragment(stringDoc);
        destaquesContainer.appendChild(range);
    });

    // Inicialize o carrossel após adicionar os slides
    initCarousel(destaquesContainer);
}

function initCarousel(container) {
    // Lógica de inicialização do carrossel aqui
    // Por exemplo, se estiver usando Slick:
    $(container).slick({
        // Configurações do Slick aqui
    });
}

async function getdestaques() {
    return await fetch('http://localhost:3000/produtos').then(r => r.json());
}

document.addEventListener('DOMContentLoaded', e => {
    loaddestaques();
});
