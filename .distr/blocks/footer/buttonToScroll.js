/* buttonToScroll */
function buttonToScroll() {
  const footerBtn = document.querySelector(".bottom-scroll"),
        blockBottom = document.getElementById("bottom");

  window.addEventListener("scroll", () => {
    let scrollTop = $(window).scrollTop();

    if (scrollTop >= blockBottom.offsetTop - 1000) {
      footerBtn.classList.remove("bottom-scroll--active");
    } else if(scrollTop >= 500) {
      footerBtn.classList.add("bottom-scroll--active");
    } else {
      footerBtn.classList.remove("bottom-scroll--active");
    }

  });
}
buttonToScroll();