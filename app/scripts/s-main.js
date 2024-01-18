(function () {
    const main = document.querySelector(".main");
    if (!main) return;

    const slides = main.querySelectorAll(".main__slide");
    const speed = 2000;
    let flagAnim = false;

    const videoDesktop = main.querySelector("#video-desktop");
    const videoMobile = main.querySelector("#video-mobile");
    const arrVideo = [videoDesktop, videoMobile];
    let media = window.innerWidth;

    function sliderPlay() {
        let activeIndex = 0;
        let timerId;

        if (flagAnim) return;

        timerId = setInterval(() => {
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

    function init() {
        if (media >= 769) {
            videoDesktop.play();
            videoDesktop.onended = () => {
                videoDesktop.pause();
                videoDesktop.currentTime = 17;
                videoDesktop.play();
            };
        } else {
            videoMobile.play();
        }

        sliderPlay();
    }

    if (document.readyState === "complete") {
        init();
    } else {
        window.addEventListener("load", () => {
            init();
        });
    }
})();
