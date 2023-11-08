(function() {
    const menu = document.querySelector('.menu');
    if (!menu) return;

    const btnMenu = menu.querySelector('.menu__btn');

    btnMenu.addEventListener('click', (e) => {
        menu.classList.toggle('active');
    });

}());