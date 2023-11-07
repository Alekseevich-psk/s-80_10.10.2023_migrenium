(function () {
    const header = document.querySelector(".header");
    if (!header) return;

    const classHeaderScroll = "scroll";
    const marginBottomFromElement = 0;

    const headerHeight = header.querySelector(".header__height");
    const headerBody = header.querySelector(".header__body");
    const heightElem = getHeightElem(headerBody);

    addClassForElement(headerBody);

    window.onscroll = () => {
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
