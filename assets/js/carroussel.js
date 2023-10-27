let productContainers = document.querySelectorAll(".carroussel-container");
const nxtBtn = document.querySelectorAll(".nxt-seta");
const preBtn = document.querySelectorAll(".pre-seta");

productContainers.forEach((item, i) => {
  let containerDimensions = item.getBoundingClientRect();
  let containerWidth = containerDimensions.width;
  let scrollPosition = 0;

  nxtBtn[i].addEventListener("click", () => {
    scrollPosition += containerWidth;
    if (scrollPosition >= item.scrollWidth) {
      scrollPosition = 0;
    }
    item.scrollTo({
      left: scrollPosition,
      behavior: "smooth",
    });
  });

  preBtn[i].addEventListener("click", () => {
    scrollPosition -= containerWidth;
    if (scrollPosition < 0) {
      scrollPosition = item.scrollWidth - containerWidth;
    }
    item.scrollTo({
      left: scrollPosition,
      behavior: "smooth",
    });
  });
});