$(window).load(function () {

	$('.js-swiper__video-recall').each(function(){
		var videoRecallCarousel = new Swiper('.js-swiper__video-recall .swiper-container.--products', {
			slidesPerView: 1,
			slidesPerColumn: 1,
			spaceBetween: 8,
			loop:false,
			autoHeight:true,
			slidesPerGroup: 1,
			pagination: {
				el: '.js-swiper__video-recall .swiper-pagination.--products',
				clickable: true,
				type: "fraction",
			},
			navigation: {
				nextEl: '.js-swiper__video-recall .swiper-button-next.--products',
				prevEl: '.js-swiper__video-recall .swiper-button-prev.--products',
			},
			breakpoints: {
				990: {
				  slidesPerView: 3.15,
				  spaceBetween: 8,
				},
				640: {
				  slidesPerView: 2.15,
				  spaceBetween: 8,
				},
			}    
		});
	});

});