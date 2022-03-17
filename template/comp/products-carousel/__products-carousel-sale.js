$(window).load(function () {

	let productsCounter = 0;
	$('.js-swiper__products-sale').each(function(){
		productsCounter++;
		let selector = 'js-swiper__products-sale--' + productsCounter;
		$(this).addClass(selector);
		var productsSaleCarousel = new Swiper('.' + selector + ' .swiper-container.--products', {
			slidesPerView: 1,
			slidesPerColumn: 1,
			spaceBetween: 8,
			loop: false,
			autoHeight: true,
			allowTouchMove: true,
			slidesPerGroup: 1,
			pagination: {
				el: '.' + selector + ' .swiper-pagination.--products',
				clickable: true,
				type: 'bullets',
			},
			navigation: {
				nextEl: '.' + selector + ' .swiper-button-next.--products',
				prevEl: '.' + selector + ' .swiper-button-prev.--products',
			},
			breakpoints: {
				990: {
					slidesPerView: 3,
					spaceBetween: 16,
					pagination: {
						type: 'fraction',
					},
				},
				640: {
					slidesPerView: 2,
					spaceBetween: 16,
					pagination: {
						type: 'fraction'
					}
				},
				500: {
					slidesPerView: 1,
					spaceBetween: 16
				}
			}
		});

		productsSaleCarousel.on('slideChange', function () {
			const observer = lozad('.lazy');
			observer.observe();
		});

	});

	let productCoutner = 0;
	$('.js-swiper__product-sale').each(function(){
		productCoutner++;
		let selector = 'js-swiper__product-sale--' + productCoutner;
		$(this).addClass(selector);
		var productSaleCarousel = new Swiper('.' + selector + ' .swiper-container.--product', {
			slidesPerView: 1,
			slidesPerColumn: 1,
			spaceBetween: 8,
			loop:true,
			autoHeight:true,
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
					spaceBetween: 8,
				},
				640: {
					slidesPerView: 1,
					spaceBetween: 8,
				},
			}    
		});
		
		productSaleCarousel.on('slideChange', function () {
			const observer = lozad('.lazy');
			observer.observe();
		});

	});

});