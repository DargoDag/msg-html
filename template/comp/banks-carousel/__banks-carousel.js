$(window).load(function () {

	$('.js-swiper__banks').each(function(){
		var banksCarousel = new Swiper('.js-swiper__banks .swiper-container.--banks', {
			slidesPerView: 2,
			slidesPerColumn: 1,
			spaceBetween: 8,
			loop: false,
			allowTouchMove: true,
			slidesPerGroup: 1,
			pagination: {
				el: '.js-swiper__banks .swiper-pagination.--banks',
				clickable: true,
				type: "fraction",
			},
			navigation: {
				nextEl: '.js-swiper__banks .swiper-button-next.--banks',
				prevEl: '.js-swiper__banks .swiper-button-prev.--banks',
			},
			breakpoints: {
				1300: {
				  slidesPerView: 6,
				  spaceBetween: 24,
                  slidesPerColumn: 2,
                  grid: {
                    rows: 2
                  }
				},
				990: {
				  slidesPerView: 4,
				  spaceBetween: 24,
                  slidesPerColumn: 2,
                  grid: {
                    rows: 2
                  }
				},
				640: {
				  slidesPerView: 3,
				  spaceBetween: 16,
                  slidesPerColumn: 2,
				}
			}
		});
	});

});