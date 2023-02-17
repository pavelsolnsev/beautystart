/* programToggle */

function programToggle() {
  const accordeon = document.querySelector(".program__wrapper"),
    tab = accordeon.querySelectorAll(".program__item"),
    tabContent = document.querySelectorAll(".program__item-answer"),
    arrow = accordeon.querySelector(".program__item-arrow");

  // Установка первого активного блока
  for (let d = 0; d < tabContent.length; d++) {
    if (d === 0) {
      tabContent[d].style.height = tabContent[d].scrollHeight + "px";
      arrow.classList.add("active");
      tab[d].classList.add("active");
    }
  }


  // Открытие/закрытие блока с контентом
  const toggleTab = (index) => {
    for (let i = 0; i < tabContent.length; i++) {
      
      // карточка, по которой кликнули открывается. Все остальные закрываются.
      if (index === i) {
        tab[i].classList.add("active");
        tab[i].querySelector(".program__item-arrow").classList.add("active");
        tabContent[i].style.height = tabContent[i].scrollHeight + "px";
      } else {
        tab[i].classList.remove("active");
        tab[i].querySelector(".program__item-arrow").classList.remove("active");
        tabContent[i].style.height = "0" + "px";
      }
    }
  };


  // Клик по карточке аккордиона
  accordeon.addEventListener("click", (event) => {
    let target = event.target;

    // Если карточка уже активна, то она закрывается
    if (target.closest(".active")) {
      for (let i = 0; i < tab.length; i++) {
        tab[i].classList.remove("active");
        tab[i].querySelector(".program__item-arrow").classList.remove("active");
        tabContent[i].style.height = "0" + "px";
      }
    } else {
      target = target.closest(".program__item");

      if (target) {
        tab.forEach((item, i) => {
          if (item === target) {
            toggleTab(i);
          }
        });
      }
    }
  });

}
programToggle();