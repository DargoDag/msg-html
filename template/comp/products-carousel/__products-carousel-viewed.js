$(window).load(function () {
	$('.js-swiper__products-viewed').each(function(){
		var viewedProductsCarousel = new Swiper('.js-swiper__products-viewed .swiper-container', {
			slidesPerView: 1,
			slidesPerColumn: 1,
			spaceBetween: 8,
			loop: false,
			autoHeight:true,
			allowTouchMove: true,
			slidesPerGroup: 1,
			pagination: {
				el: '.js-swiper__products-viewed .swiper-pagination',
				clickable: true,
				type: 'bullets',
			},
			navigation: {
				nextEl: '.js-swiper__products-viewed .swiper-button-next',
				prevEl: '.js-swiper__products-viewed .swiper-button-prev',
			},
			breakpoints: {
				990: {
					slidesPerView: 6,
					spaceBetween: 24,
					allowTouchMove: false,
					pagination: {
						type: 'fraction'
					}
				},
				640: {
					slidesPerView: 4,
					spaceBetween: 16,
					allowTouchMove: true,
					pagination: {
						type: 'fraction'
					}
				}
			}
		});

		viewedProductsCarousel.on('slideChange', function () {
			const observer = lozad('.lazy');
			observer.observe();
		});

	});

});