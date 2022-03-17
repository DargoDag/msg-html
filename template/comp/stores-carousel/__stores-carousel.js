$(window).load(function () {

	$('.js-swiper__stores').each(function() {
		var storesCarousel = new Swiper('.js-swiper__stores .swiper-container.--products', {
			slidesPerView: 1,
			slidesPerColumn: 1,
			spaceBetween: 8,
			loop:false,
			autoHeight:true,
			allowTouchMove: false,
			slidesPerGroup: 1,
			pagination: {
				el: '.js-swiper__stores .swiper-pagination.--products',
				clickable: true,
				type: "fraction",
			},
			navigation: {
				nextEl: '.js-swiper__stores .swiper-button-next.--products',
				prevEl: '.js-swiper__stores .swiper-button-prev.--products',
			},
			breakpoints: {
				990: {
				  slidesPerView: 3,
				  spaceBetween: 24,
				},
				640: {
				  slidesPerView: 2,
				  spaceBetween: 16,
				},
			}    
		});

		storesCarousel.on('slideChange', function () {
			const observer = lozad('.lazy');
			observer.observe();
		});
		
	});

});