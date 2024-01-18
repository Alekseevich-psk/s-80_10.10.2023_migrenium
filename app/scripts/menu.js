(function () {
    const menu = document.querySelector(".menu");
    if (!menu) return;

    const btnMenu = menu.querySelector(".menu__btn");
    const body = document.querySelector("body");
    const links = document.querySelectorAll(".menu__link");

    btnMenu.addEventListener("click", (e) => {
        menu.classList.toggle("active");
        body.classList.toggle("overflow");
    });

    function removeClass(elem, value) {
        if (elem.classList.contains(value)) {
            elem.classList.remove(value);
        }
    }

    links.forEach((link) => {
        link.addEventListener("click", () => {
            removeClass(menu, "active");
            removeClass(body, "overflow");
        });
    });
})();
