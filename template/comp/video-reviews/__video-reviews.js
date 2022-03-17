$(window).load(function () {

	$('.js-swiper__video-reviews').each(function(){
		var videoReviewsCarousel = new Swiper('.js-swiper__video-reviews .swiper-container.--products', {
			slidesPerView: 1,
			slidesPerColumn: 1,
			spaceBetween: 8,
			loop:false,
			autoHeight:true,
			slidesPerGroup: 1,
			pagination: {
				el: '.js-swiper__video-reviews .swiper-pagination.--products',
				clickable: true,
				type: "fraction",
			},
			navigation: {
				nextEl: '.js-swiper__video-reviews .swiper-button-next.--products',
				prevEl: '.js-swiper__video-reviews .swiper-button-prev.--products',
			},
			breakpoints: {
				990: {
				  slidesPerView: 2.15,
				  spaceBetween: 8,
				},
				640: {
				  slidesPerView: 1.15,
				  spaceBetween: 8,
				},
			}    
		});
	});

});