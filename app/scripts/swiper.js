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