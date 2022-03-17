$(window).load(function () {

	$('.js-swiper__promo').each(function(){
		var promoCarousel = new Swiper('.js-swiper__promo .swiper-container.--promo', {
			slidesPerView: 1.3,
			slidesPerColumn: 1,
			spaceBetween: 24,
			loop:false,
			autoHeight:true,
			slidesPerGroup: 1,
			pagination: {
				el: '.js-swiper__promo .swiper-pagination.--products',
				clickable: true,
				type: "fraction",
			},
			navigation: {
				nextEl: '.js-swiper__promo .swiper-button-next.--products',
				prevEl: '.js-swiper__promo .swiper-button-prev.--products',
			},
			breakpoints: {
				1440: {
				  slidesPerView: 4,
				  spaceBetween: 16,
				},
				990: {
				  slidesPerView: 2.8,
				  spaceBetween: 16,
				},
				640: {
				  slidesPerView: 1.8,
				  spaceBetween: 8,
				},
			}
		});
	});

});