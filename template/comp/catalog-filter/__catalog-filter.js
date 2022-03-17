$(document).ready(function () {
    
    let price = {
        min: 0,
        max: 0,
    };
    let brands = [];
    let colors = [];
    let areas = [];
    let countries = [];

    function getHtml(url){
        $.ajax({
            url:url,
            type:'GET',
            success: function(data){
                $('.content__catalog-filter-ajax').html($(data).find('.content__catalog-filter-ajax').html());
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
                    });
                    
                });
                $('html, body').animate({
                    scrollTop: parseInt($(".content__catalog-filter-ajax").offset().top - 104)
                }, 480);
            }
         });
    }

    function filter(){
        let values = [];
        if (price.max > 0) {
            values.push({
                type: 'price',
                values: price,
            })
        }
        if (brands.length > 0) {
            values.push({
                type: 'brands',
                values: brands,
            })
        }
        if (colors.length > 0) {
            values.push({
                type: 'colors',
                values: colors,
            })
        }
        if (areas.length > 0) {
            values.push({
                type: 'areas',
                values: areas,
            })
        }
        if (countries.length > 0) {
            values.push({
                type: 'countries',
                values: countries,
            })
        }
        if (values.length > 0){
            let json = JSON.stringify(values);
            let url = window.location.href + '?props=true&filter=' + json;
            console.log(json);
            getHtml(url);
        } else {
            getHtml(window.location.href);
        }
    }

	$(".js-range-slider").ionRangeSlider({
        type: "double",
		skin: "round",
        postfix: " Р",
        onFinish: function (data) {
            price.min = data.from;
            price.max = data.to;
            filter();
        },
    });

    $('.filter-item .checkbox input').on('change', function(){
        let group_selected = [];
        $(this).parents('.filter-item').find('.checkbox input:checked').each(function(){
            group_selected.push($(this).val());
        })
        $(this).find('.tooltip__desc span').html(group_selected.length);
        let count_label = 'Не выбрано';
        let filter_name = '';
        if (group_selected.length > 0){
            count_label = 'Выбрано: ' + group_selected.length;
            group_selected.forEach(el => {
                filter_name += el + ', ';
            });
        } else {
            filter_name = 'Выбрать';
        }
        $(this).parents('.filter-item').find('.filter-item__count-label').html(count_label)
        $(this).parents('.filter-item').find('.filter-item__name').html(filter_name)
        getValues();
        filter();
	});

    $('.tooltip__clear-btn').on('click', function(){
        $(this).parents('.filter-item').find('.checkbox input').prop('checked', false);
        $(this).parents('.filter-item').find('.checkbox input').removeAttr('checked');
        $(this).parents('.filter-item').find('.filter-item__count-label').html('Не выбрано');
        $(this).parents('.filter-item').find('.filter-item__name').html('Выбрать');
        getValues();
        filter();
        var uri = window.location.toString();
        if (uri.indexOf("?") > 0) {
            var clean_uri = uri.substring(0, uri.indexOf("?"));
            window.history.replaceState({}, document.title, clean_uri);
        }
	});
    
    function getValues(){
        brands = [];
        $('.filter-item.--filter_brands').find('.checkbox input:checked').each(function(){
            brands.push($(this).val());
        })

        countries = [];
        $('.filter-item.--filter_country').find('.checkbox input:checked').each(function(){
            countries.push($(this).val());
        })

        colors = [];
        $('.filter-item.--filter_colors').find('.checkbox input:checked').each(function(){
            colors.push($(this).val());
        })

        areas = [];
        $('.filter-item.--filter_areas').find('.checkbox input:checked').each(function(){
            areas.push($(this).val());
        })

        scope = [];
        $('.filter-item.--filter_scope').find('.checkbox input:checked').each(function(){
            scope.push($(this).val());
        })
    }

    $('.tooltip__accept-btn').on('click', function(){
        console.log('adasda');
        getValues();
        filter();
	});

    // $('.js-stiky--filters').hcSticky({
    //     stickTo: 'main',
    //     top: 80,
    // });

    $(window).scroll(function() {
        let top  = $(this).scrollTop();
        if (top >= '500') {
            $('.content__catalog-filters').addClass('--is-sticky');
        } else {
            $('.content__catalog-filters').removeClass('--is-sticky')
        }
    })

    $('.catalog-filter__show-btn').on('click', function(){
        $(this).parents().find('.catalog-filter__sub-filters-wrap').slideToggle(180);
        $(this).toggleClass('is-open').find('.catalog-filter__show-btn-label').text(function(i, text){
			return text === "Развернуть" ? "Свернуть" : "Развернуть";
		});
        $('.catalog-filter').toggleClass('is-open');
	});

    $('.catalog-filter__mob-btn').on('click', function() {
        $('.catalog-filter__mob-btn-icon').toggleClass('is-open');
        $('.catalog-filter__wrap').slideToggle(180);
    });

    $('.filter-item__icon').on('click', function() {
        $(this).toggleClass('is-active');
        $(this).parent().find('.filter-item__tooltip').toggleClass('is-open')
    })

});