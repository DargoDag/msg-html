$(window).load(function () {

    $('.order-history-item__toggle-btn').on('click', function() {
        $(this).toggleClass('is-active');
        $(this).parents('.order-history-item').find('.order-history-item__detail-info').toggleClass('is-active').slideToggle();
    });

});