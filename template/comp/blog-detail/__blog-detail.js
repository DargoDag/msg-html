$(window).load(function () {

	$('.js-swiper__news').each(function(){
		var productsCarousel = new Swiper('.js-swiper__news .swiper-container.--products', {
			slidesPerView: 1,
			slidesPerColumn: 1,
			spaceBetween: 8,
			loop:false,
			autoHeight:true,
			slidesPerGroup: 1,
			pagination: {
				el: '.js-swiper__news .swiper-pagination.--products',
				clickable: true,
				type: "fraction",
			},
			navigation: {
				nextEl: '.js-swiper__news .swiper-button-next.--products',
				prevEl: '.js-swiper__news .swiper-button-prev.--products',
			},
			breakpoints: {
				990: {
				  slidesPerView: 2,
				  spaceBetween: 24,
				},
				640: {
				  slidesPerView: 2,
				  spaceBetween: 16,
				},
			}    
		});
	});

});