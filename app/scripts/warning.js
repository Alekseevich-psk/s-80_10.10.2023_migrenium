(function() {
  
    const warning = document.querySelector('.footer__warning');
    if(!warning) return;

    if(localStorage.warning === 'hide') {
        return warning.classList.add('hide');
    }

    const btn = warning.querySelector('.footer__warning-btn');

    btn.addEventListener('click', () => {
        warning.classList.add('hide');

        localStorage.setItem('warning', 'hide');
    });

}())