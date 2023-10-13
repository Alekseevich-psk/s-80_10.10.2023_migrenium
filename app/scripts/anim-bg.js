(function () {
    const animBg = document.querySelector(".anim-bg");
    if (!animBg) return;

    const el = animBg.querySelector(".anim-bg__element");
    const interval = 4000;

    let x = 0;
    let y = 0;
    let w = 10;
    let h = 10;

    random();
    newCoord();

    setInterval(() => {
        random();
        newCoord();
    }, interval);

    function random() {
        let max = 100;
        let min = 70;

        x = Math.floor(Math.random() * (max / 4));
        y = Math.floor(Math.random() * (max / 4));
        w = Math.floor((Math.random() * max) + min);
        h = Math.floor((Math.random() * max) + min);
    }

    function newCoord() {
        el.style.top = y + "%";
        el.style.left = x + "%";
        el.style.height = h + "%";
        el.style.width = w + "%";
    }
})();
