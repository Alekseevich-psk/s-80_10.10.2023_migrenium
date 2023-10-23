(function () {
    const main = document.querySelector(".main");
    if (!main) return;

    const slides = main.querySelectorAll(".main__slide");
    const speed = 2000;
    let flagAnim = false;

    const videoDesktop = main.querySelector("#video-desktop");
    const videoMobile = main.querySelector("#video-mobile");
    const arrVideo = [videoDesktop, videoMobile];

    arrVideo.forEach((video, index) => {
        // video.addEventListener("loadeddata", () => {
        //     if (video.readyState >= 2) {
        //         video.play();
        //         sliderPlay();
        //     }
        // });

        // video.onloadeddata = function(e) {
        //     if (video.readyState >= 2) {
        //         video.play();
        //         sliderPlay();
        //     }
        // }

        // video.addEventListener("ended", function () {
        //     video.pause();
        //     if ((index = 0)) {
        //         video.currentTime = 17;
        //         video.play();
        //     }
        // });
    });

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
})();
