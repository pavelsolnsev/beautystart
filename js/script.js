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


$(function () {
 
    initLazy();
  
    function initLazy() {
  
      let
        lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
        active = false,
        threshold = 200
        ;
  
      const lazyLoad = function (e) {
        if (active === false) {
          active = true;
  
          setTimeout(function () {
            lazyArr.forEach(function (lazyObj) {
              if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {
  
                if (lazyObj.dataset.src) {
                  let
                    img = new Image(),
                    src = lazyObj.dataset.src
                    ;
                  img.src = src;
                  img.onload = function () {
                    if (!!lazyObj.parent) {
                      lazyObj.parent.replaceChild(img, lazyObj);
                    } else {
                      lazyObj.src = src;
                    }
                  }
                  lazyObj.removeAttribute('data-src');
                }
  
                if (lazyObj.dataset.srcset) {
                  lazyObj.srcset = lazyObj.dataset.srcset;
                  lazyObj.removeAttribute('data-srcset');
                }
  
                lazyObj.classList.remove('lazy');
                lazyObj.classList.add('lazy-loaded');
  
                lazyArr = lazyArr.filter(function (obj) {
                  return obj !== lazyObj;
                });
  
                if (lazyArr.length === 0) {
                  document.removeEventListener('scroll', lazyLoad);
                  window.removeEventListener('resize', lazyLoad);
                  window.removeEventListener('orientationchange', lazyLoad);
                }
              }
            });
  
            active = false;
          }, 200);
        }
      };
  
      lazyLoad();
  
      document.addEventListener('scroll', lazyLoad);
      window.addEventListener('resize', lazyLoad);
      window.addEventListener('orientationchange', lazyLoad);
  
    }
  
  
    $('[data-fancybox=""]').fancybox({
      autoFocus: false
    });
  
});

