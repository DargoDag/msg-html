$(document).ready(function() {
    $(window).scroll(function() {
        $('.header-bottom__catalog').addClass('--is-close');
        let top = $(window).scrollTop();
        if (top == '0') {
            $('.header-bottom__catalog').removeClass('--is-close')
        }
    })
})