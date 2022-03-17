$(window).load(function () {

	$('.js-swiper__additionals').each(function(){
		var additionalsCarousel = new Swiper('.js-swiper__additionals .swiper-container.--products', {
			slidesPerView: 1,
			slidesPerColumn: 1,
			spaceBetween: 8,
			loop:false,
			autoHeight:true,
			allowTouchMove: false,
			slidesPerGroup: 1,
			pagination: {
				el: '.js-swiper__additionals .swiper-pagination.--products',
				clickable: true,
				type: "fraction",
			},
			navigation: {
				nextEl: '.js-swiper__additionals .swiper-button-next.--products',
				prevEl: '.js-swiper__additionals .swiper-button-prev.--products',
			},
			breakpoints: {
				990: {
				  slidesPerView: 4,
				  spaceBetween: 16,
				},
				640: {
				  slidesPerView: 3,
				  spaceBetween: 8,
				},
			}    
		});
	});

});