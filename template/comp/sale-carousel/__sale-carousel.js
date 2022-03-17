$(window).load(function () {

	let relatedCarusl = 0;
	$('.js-swiper__sale').each(function(){
		relatedCarusl++;
		let selector = 'js-swiper__sale-carousel--' + relatedCarusl;
		$(this).addClass(selector);
		var saleCarousel = new Swiper('.' + selector + ' .swiper-container', {
			slidesPerView: 1,
			slidesPerColumn: 1,
			spaceBetween: 8,
			loop: true,
			autoHeight:true,
			slidesPerGroup: 1,
			pagination: {
				el: '.' + selector + ' .swiper-pagination',
				clickable: true
			},
			navigation: {
				nextEl: '.' + selector + ' .swiper-button-next',
				prevEl: '.' + selector + ' .swiper-button-prev',
			},
			breakpoints: {
				990: {
				  slidesPerView: 1,
				  spaceBetween: 8,
				},
				640: {
				  slidesPerView: 1,
				  spaceBetween: 8,
				},
			}    
		});
		

		var saleTradeInCarousel = new Swiper('.js-swiper__sale--tradeIn .swiper-container', {
			// Мобилка
				slidesPerView: 1,
				slidesPerColumn: 1,
				spaceBetween: 8,
				autoHeight:true,
				slidesPerGroup: 1,
				pagination: {
					el: '.js-swiper__sale--tradeIn .swiper-pagination',
					clickable: true,
				},
				navigation: {
					nextEl: '.js-swiper__sale--tradeIn .swiper-button-next',
					prevEl: '.js-swiper__sale--tradeIn .swiper-button-prev',
				},
				breakpoints: {
					990: {
						slidesPerView: 1,
						spaceBetween: 8,
					},
					640: {
						slidesPerView: 1,
						spaceBetween: 8
					}
				}
		});

		function getProduct2() {
			setTimeout(() => {
				let product_name = $('.trade-in__products-carousel').find('.swiper-slide:first-child .product-item__name').text();
				$('.trade-in__product-name').val(product_name)
			}, 100)
			
		};

		getProduct2();

		saleTradeInCarousel.on('slideChange', function () {
			setTimeout(() => {
				let product_name = $('.trade-in__products-carousel').find('.swiper-slide.swiper-slide-active .product-item__name').text();
				$('.trade-in__product-name').val(product_name)
			}, 100)
		})
	})

});