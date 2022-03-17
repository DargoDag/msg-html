$(window).load(function () {

	$('.js-swiper__products').each(function(){
		var productsCarousel = new Swiper('.js-swiper__products .swiper-container.--products', {
			slidesPerView: 1,
			slidesPerColumn: 1,
			spaceBetween: 8,
			loop:false,
			autoHeight:true,
			allowTouchMove: true,
			slidesPerGroup: 1,
			pagination: {
				el: '.js-swiper__products .swiper-pagination.--products',
				clickable: true,
				type: 'bullets',
			},
			navigation: {
				nextEl: '.js-swiper__products .swiper-button-next.--products',
				prevEl: '.js-swiper__products .swiper-button-prev.--products',
			},
			breakpoints: {
				990: {
					slidesPerView: 4,
					spaceBetween: 24,
					allowTouchMove: false,
					pagination: {
						type: 'fraction'
					}
				},
				640: {
					slidesPerView: 3,
					spaceBetween: 16,
					allowTouchMove: true,
					pagination: {
						type: 'fraction'
					}
				},
			}
		});
	});

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
		
	})

});