(function () {
    const reviews = document.querySelector(".reviews");
    if (!reviews) return;

    new Swiper(".reviews__slider", {
        spaceBetween: 30,
        navigation: {
            nextEl: ".reviews .sl-arrows__arrow--next",
            prevEl: ".reviews .sl-arrows__arrow--prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 1.1,
                spaceBetween: 20,
            },
            960: {
                slidesPerView: 2.1,
                spaceBetween: 30,
            },
            1280: {
                slidesPerView: 3,
            },
        },
    });
})();

(function () {
    const price = document.querySelector(".price");
    if (!price) return;

    new Swiper(".price__slider", {
        spaceBetween: 30,
        navigation: {
            nextEl: ".price .sl-arrows__arrow--next",
            prevEl: ".price .sl-arrows__arrow--prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 1.1,
                spaceBetween: 20,
            },
            960: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1280: {
                slidesPerView: 3,
                spaceBetween: 30,
            }
        },
    });
})();

(function () {
    const info = document.querySelector(".info");
    if (!info) return;

    new Swiper(".info__slider", {
        spaceBetween: 30,
        navigation: {
            nextEl: ".info .sl-arrows__arrow--next",
            prevEl: ".info .sl-arrows__arrow--prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 1.1,
                spaceBetween: 20,
            },
            960: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1280: {
                slidesPerView: 3,
                spaceBetween: 30,
            }
        },
    });
})();