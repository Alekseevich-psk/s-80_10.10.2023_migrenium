"use strict";

(function () {
  var animBg = document.querySelector(".anim-bg");
  if (!animBg) return;
  var el = animBg.querySelector(".anim-bg__element");
  var interval = 4000;
  var x = 0;
  var y = 0;
  var w = 10;
  var h = 10;
  random();
  newCoord();
  setInterval(function () {
    random();
    newCoord();
  }, interval);
  function random() {
    var max = 100;
    var min = 70;
    x = Math.floor(Math.random() * (max / 4));
    y = Math.floor(Math.random() * (max / 4));
    w = Math.floor(Math.random() * max + min);
    h = Math.floor(Math.random() * max + min);
  }
  function newCoord() {
    el.style.top = y + "%";
    el.style.left = x + "%";
    el.style.height = h + "%";
    el.style.width = w + "%";
  }
})();
"use strict";

(function () {
  var header = document.querySelector(".header");
  if (!header) return;
  var classForHeaderScroll = "scroll";
  var marginBottomFromElement = 0;
  var nextElem = header.nextElementSibling;
  var heightElem = getMaxOfArray(header);
  addClassForElement(header);
  window.onscroll = function () {
    addClassForElement(header);
  };
  function addClassForElement(el) {
    scrollHeight() > heightElem ? el.classList.add(classForHeaderScroll) : el.classList.remove(classForHeaderScroll);
    // nextElem.style.marginTop = heightElem + 'px';
  }

  function scrollHeight() {
    return Math.max.apply(null, [window.pageYOffset, document.documentElement.scrollTop]);
  }
  function getMaxOfArray(el) {
    return Math.max.apply(null, [el.clientHeight, el.offsetHeight]) + marginBottomFromElement;
  }
})();
"use strict";

(function () {
  var menu = document.querySelector('.menu');
  if (!menu) return;
  var btnMenu = menu.querySelector('.menu__btn');
  btnMenu.addEventListener('click', function () {
    menu.classList.toggle('active');
  });
})();
"use strict";

document.addEventListener("DOMContentLoaded", function () {
  var preloader = document.querySelector('.preloader');
  if (!preloader) return;
  setTimeout(function () {
    document.querySelector(".preloader").classList.add("hide");
  }, 1000);
});
"use strict";

(function () {
  var reviews = document.querySelector(".reviews");
  if (!reviews) return;
  new Swiper(".reviews__slider", {
    spaceBetween: 30,
    navigation: {
      nextEl: ".reviews .sl-arrows__arrow--next",
      prevEl: ".reviews .sl-arrows__arrow--prev"
    },
    breakpoints: {
      320: {
        slidesPerView: 1.1,
        spaceBetween: 20
      },
      960: {
        slidesPerView: 2.1,
        spaceBetween: 30
      },
      1280: {
        slidesPerView: 3
      }
    }
  });
})();
(function () {
  var price = document.querySelector(".price");
  if (!price) return;
  new Swiper(".price__slider", {
    spaceBetween: 30,
    navigation: {
      nextEl: ".price .sl-arrows__arrow--next",
      prevEl: ".price .sl-arrows__arrow--prev"
    },
    breakpoints: {
      320: {
        slidesPerView: 1.1,
        spaceBetween: 20
      },
      960: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      1280: {
        slidesPerView: 3,
        spaceBetween: 30
      }
    }
  });
})();
(function () {
  var info = document.querySelector(".info");
  if (!info) return;
  new Swiper(".info__slider", {
    spaceBetween: 30,
    navigation: {
      nextEl: ".info .sl-arrows__arrow--next",
      prevEl: ".info .sl-arrows__arrow--prev"
    },
    breakpoints: {
      320: {
        slidesPerView: 1.1,
        spaceBetween: 20
      },
      960: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      1280: {
        slidesPerView: 3,
        spaceBetween: 30
      }
    }
  });
})();
"use strict";

(function () {
  var warning = document.querySelector('.footer__warning');
  if (!warning) return;
  if (localStorage.warning === 'hide') {
    return warning.classList.add('hide');
  }
  var btn = warning.querySelector('.footer__warning-btn');
  btn.addEventListener('click', function () {
    warning.classList.add('hide');
    localStorage.setItem('warning', 'hide');
  });
})();