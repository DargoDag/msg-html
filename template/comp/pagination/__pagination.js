$(document).ready(function () {

    $('body').on('click', '.pagination__load-more', function() {
        $(this).toggleClass('is-loaded');
        $(this).find('span').text('загрузка ...');
        $(this).find('.pagination__icon').hide();
        let href = $(this).data('href');
        $.ajax({
            url: href,
            type:'GET',
            success: function(data) {
                $('.content__catalog-pagination').remove();
                let old_content = $('.content__catalog-filter-ajax').html();
                let new_content = $(data).find('.content__catalog-filter-ajax').html();
                $('.content__catalog-filter-ajax').html(old_content + new_content);

                const observer = lozad('.lazy');
                observer.observe();
                let productCoutner = 0;
                $('.js-swiper__product').each(function(){
                    productCoutner++;
                    let selector = 'js-swiper__product--' + productCoutner;
                    $(this).addClass(selector);
                    var productCarousel = new Swiper('.' + selector + ' .swiper-container.--product', {
                        slidesPerView: 1,
                        slidesPerColumn: 1,
                        spaceBetween: 8,
                        loop: true,
                        autoHeight: false,
                        allowTouchMove: true,
                        slidesPerGroup: 1,
                        pagination: {
                            el: '.' + selector + ' .swiper-pagination.--product',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.' + selector + ' .swiper-button-next.--product',
                            prevEl: '.' + selector + ' .swiper-button-prev.--product',
                        },
                        breakpoints: {
                            990: {
                                slidesPerView: 1,
                                spaceBetween: 8
                            },
                            640: {
                                slidesPerView: 1,
                                spaceBetween: 8
                            },
                        }
                    });
                    productCarousel.on('slideChange', function () {
                        const observer = lozad('.lazy');
                        observer.observe();
                    })
                })
            }
        })
    });

    $('body').on('change', '.pagination__show-in-select', function() {
        let url = window.location.origin + window.location.pathname + "?page=1&count=" + $(this).val();
        window.location.replace(url)
    })

});