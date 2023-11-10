(function () {
    const confidentiality = document.querySelector(".confidentiality");
    if (!confidentiality) return;

    if (localStorage.confidentiality === "ok") {
        return confidentiality.classList.add("hide");
    }

    const btn = confidentiality.querySelector(".confidentiality__button");

    btn.addEventListener("click", () => {
        confidentiality.classList.add("hide");
        localStorage.setItem("confidentiality", "ok");
    });
})();
