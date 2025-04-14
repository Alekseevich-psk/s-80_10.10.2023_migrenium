$(() => {

    // Залипание блока при скролле
    $('.sticky').stick_in_parent();

    // Аккордион
    $('body').on('click', '.accordion .accordion_item .head', function(e) {
        e.preventDefault();

        var $item = $(this).closest('.accordion_item'),
            $accordion = $(this).closest('.accordion');

        if ($item.hasClass('active')) {
            $item.removeClass('active').find('.data').slideUp(300);
        } else {
            $accordion.find('.accordion_item').removeClass('active');
            $accordion.find('.data').slideUp(300);

            $item.addClass('active').find('.data').slideDown(300);
        }
    })

    // Скрываем кнопки слайдера, если все элементы на экране
    $('.sl-arrows').each(function(index) {
        if (($(this).find('.sl-arrows__arrow--prev').attr('aria-disabled') == 'true') && ($(this).find('.sl-arrows__arrow--next').attr('aria-disabled') == 'true')) {
            $(this).addClass('dev__sl-arrows-disabled');
        }
    });

    // Кнопка "наверх"
    $(window).scroll(function(){
        if($(window).scrollTop() > 800) {
            $('.btn-totop').show();
        } else {
            $('.btn-totop').hide();
        }
    });

    $('.btn-totop').click(function(){
        $('html, body').animate({scrollTop: 0}, 100);
        return false;
    });

})