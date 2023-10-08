// Teste para o script

// Verifica se todos os elementos com a classe "carroussel-container" são selecionados corretamente
const productContainersTest = document.querySelectorAll(".carroussel-container");
if (productContainersTest.length === 0) {
  console.error("Nenhum elemento encontrado com a classe 'carroussel-container'");
}else{
  console.log("Elemento encontrado com a classe 'carroussel-container'")
}

// Verifica se todos os elementos com a classe "nxt-seta" são selecionados corretamente
const nxtBtnTest = document.querySelectorAll(".nxt-seta");
if (nxtBtnTest.length === 0) {
  console.error("Nenhum elemento encontrado com a classe 'nxt-seta'");
} else{
  console.log("Elemento encontrado com a classe 'nxt-seta'")
}

// Verifica se todos os elementos com a classe "pre-seta" são selecionados corretamente
const preBtnTest = document.querySelectorAll(".pre-seta");
if (preBtnTest.length === 0) {
  console.error("Nenhum elemento encontrado com a classe 'pre-seta'");
} else{
  console.log("Elemento encontrado com a classe 'pre-seta'")
}

// Testa cada elemento encontrado em productContainersTest
productContainersTest.forEach((item, i) => {
  // Verifica se o elemento possui as dimensões corretas
  const containerDimensions = item.getBoundingClientRect();
  const containerWidth = containerDimensions.width;
  if (containerWidth === 0) {
    console.error(`As dimensões do elemento ${i} não são válidas`);
  } else{
    console.log(`As dimensões do elemento ${i} são válidas`)
  }
});
