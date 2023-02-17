$(function () {
  
burgerMenu();
scrolToLink();
styleToScroll();

function burgerMenu() {
  const burgerBtn = document.querySelector(".burger__menu"),
    hamIcon = document.querySelector(".ham"),
    burgerMenu = document.querySelector(".header__nav"),
    burgerLink = document.querySelectorAll(".header__link"),
    body = document.querySelector("body");

  burgerBtn.addEventListener("click", () => {
    burgerMenu.classList.toggle("header__nav--active");
    burgerBtn.classList.toggle("active");
    body.classList.toggle("noscroll");
  });

  burgerLink.forEach((item) => {
    item.addEventListener("click", () => {
      burgerMenu.classList.toggle("header__nav--active");
      body.classList.remove("noscroll");
      burgerBtn.classList.remove("active");
      hamIcon.classList.remove("active");
    });
  });
  }

  function scrolToLink() {
    $("a.scroll-link").click(function () {
      let elementClick = $(this).attr("href");
      let destination = $(elementClick).offset().top;
      $("html, body")
        .stop()
        .animate({ scrollTop: destination - $(".header").outerHeight() }, 600);
    });
  }

  function styleToScroll() {
    const headerMenu = document.querySelector(".header");
  
    window.addEventListener("scroll", () => {
      let scrollTop = $(window).scrollTop();
      if (scrollTop >= 1) {
        headerMenu.classList.add("header--active");
      } else {
        headerMenu.classList.remove("header--active");
      }
    });
  }
});