$(window).load(function () {

	$('.js-swiper__brands').each(function(){
		var brandsCarousel = new Swiper('.js-swiper__brands .swiper-container.--products', {
			slidesPerView: 2,
			slidesPerColumn: 1,
			spaceBetween: 16,
			loop:false,
			autoHeight:true,
			slidesPerGroup: 4,
			pagination: {
				el: '.js-swiper__brands .swiper-pagination.--products',
				clickable: true,
				type: "fraction",
			},
			navigation: {
				nextEl: '.js-swiper__brands .swiper-button-next.--products',
				prevEl: '.js-swiper__brands .swiper-button-prev.--products',
			},
			breakpoints: {
				990: {
				  slidesPerView: 7,
				  spaceBetween: 16,
				},
				640: {
				  slidesPerView: 4,
				  spaceBetween: 16,
				},
			}    
		});
	});

});