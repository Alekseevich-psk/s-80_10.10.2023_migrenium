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
  newCord();
  setInterval(function () {
    random();
    newCord();
  }, interval);
  function random() {
    var max = 100;
    var min = 70;
    x = Math.floor(Math.random() * (max / 4));
    y = Math.floor(Math.random() * (max / 4));
    w = Math.floor(Math.random() * max + min);
    h = Math.floor(Math.random() * max + min);
  }
  function newCord() {
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
  var classHeaderScroll = "scroll";
  var marginBottomFromElement = 0;
  var headerHeight = header.querySelector(".header__height");
  var headerBody = header.querySelector(".header__body");
  var heightElem = getHeightElem(headerBody);
  addClassForElement(headerBody);
  window.onscroll = function () {
    addClassForElement(headerBody);
  };
  function addClassForElement(el) {
    if (scrollHeight() > heightElem) {
      el.classList.add(classHeaderScroll);
    } else {
      el.classList.remove(classHeaderScroll);
    }
    if (headerHeight) {
      headerHeight.style.height = heightElem + "px";
    }
  }
  function scrollHeight() {
    return Math.max.apply(null, [window.pageYOffset, document.documentElement.scrollTop]);
  }
  function getHeightElem(el) {
    return Math.max.apply(null, [el.clientHeight, el.offsetHeight]) + marginBottomFromElement;
  }
})();
"use strict";

(function () {
  var menu = document.querySelector('.menu');
  if (!menu) return;
  var btnMenu = menu.querySelector('.menu__btn');
  btnMenu.addEventListener('click', function (e) {
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
  var main = document.querySelector(".main");
  if (!main) return;
  var slides = main.querySelectorAll(".main__slide");
  var speed = 2000;
  var flagAnim = false;
  var videoDesktop = main.querySelector("#video-desktop");
  var videoMobile = main.querySelector("#video-mobile");
  var arrVideo = [videoDesktop, videoMobile];
  arrVideo.forEach(function (video, index) {
    video.oncanplay = function () {
      video.play();
      sliderPlay();
    };
    video.onended = function () {
      video.pause();
      if (index === 0) {
        video.currentTime = 17;
        video.play();
      }
    };
  });
  function sliderPlay() {
    var activeIndex = 0;
    var timerId;
    if (flagAnim) return;
    timerId = setInterval(function () {
      if (slides[activeIndex - 1]) {
        slides[activeIndex - 1].classList.remove("active");
      }
      if (activeIndex >= slides.length) {
        return clearInterval(timerId);
      }
      slides[activeIndex].classList.add("active");
      activeIndex++;
    }, speed);
    flagAnim = true;
  }
})();
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
  var articleSlider = document.querySelector(".article-slider");
  if (!articleSlider) return;
  new Swiper(".article-slider__slider", {
    spaceBetween: 30,
    navigation: {
      nextEl: ".article-slider .sl-arrows__arrow--next",
      prevEl: ".article-slider .sl-arrows__arrow--prev"
    },
    breakpoints: {
      320: {
        slidesPerView: 1.1,
        spaceBetween: 20
      },
      960: {
        slidesPerView: 2,
        spaceBetween: 30
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
  var warning = document.querySelector(".footer__warning");
  if (!warning) return;
  if (localStorage.warning === "hide") {
    return warning.classList.add("hide");
  }
  var btn = warning.querySelector(".footer__warning-btn");
  btn.addEventListener("click", function () {
    warning.classList.add("hide");
    localStorage.setItem("warning", "hide");
  });
})();