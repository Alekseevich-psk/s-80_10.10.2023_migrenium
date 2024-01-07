(function () {
    const menu = document.querySelector(".menu");
    if (!menu) return;

    const btnMenu = menu.querySelector(".menu__btn");
    const body = document.querySelector("body");

    btnMenu.addEventListener("click", (e) => {
        menu.classList.toggle("active");
        body.classList.toggle("overflow");
    });
})();
