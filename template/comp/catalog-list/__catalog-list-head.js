$(document).ready(function () {

    function products_view() {
        $('.view-btn').each(function() {
            if ($(this).children('input:checked').val() == 'list') {
                // $('.catalog-list__products-items').addClass('--list-view');
                Cookies.set('products-view', 'list');
            } else {
                // $('.catalog-list__products-items').removeClass('--list-view');
                Cookies.set('products-view', 'grid')
            };
            const observer = lozad('.lazy');
            observer.observe()
        })
    };

    products_view();

    $('body').on('click', '.view-btn', function() {
        products_view();
        location.reload()
    })

})