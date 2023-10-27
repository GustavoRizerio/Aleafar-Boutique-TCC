productContainers.forEach((item, i) => {
  let containerDimensions = item.getBoundingClientRect();
  let containerWidth = containerDimensions.width;
  let scrollPosition = 0;

  nxtBtn[i].addEventListener("click", (event) => {
    event.preventDefault();
    console.log("Next button clicked");
    
    scrollPosition += containerWidth;
    if (scrollPosition >= item.scrollWidth) {
      scrollPosition = 0;
    }
    item.scrollTo({
      left: scrollPosition,
      behavior: "smooth",
    });
  });

  preBtn[i].addEventListener("click", (event) => {
    event.preventDefault();
    console.log("Previous button clicked");
    
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