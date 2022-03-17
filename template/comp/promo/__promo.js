$(document).ready(function () {

	$('.order-form__input').on('click', function() {
		$(this).parents().find('.order-form__send-btn').removeAttr('disabled');
	});

});

$(window).load(function () {

	var swiper = new Swiper(".mySwiper", {
		loop: false,
		// Mobile
		spaceBetween: 8,
		slidesPerView: 4,
		freeMode: true,
		watchSlidesProgress: true,
		breakpoints: {
			// Desktop
			990: {
				slidesPerView: 6,
				spaceBetween: 8,
			},
			// Adaptive
			640: {
				slidesPerView: 6,
				spaceBetween: 8,
			}
		}
	});

	var swiper2 = new Swiper(".mySwiper2", {
		loop: false,
		spaceBetween: 0,
		navigation: {
			nextEl: ".mySwiper2 .swiper-button-next",
			prevEl: ".mySwiper2 .swiper-button-prev",
		},
		thumbs: {
			swiper: swiper,
		}
	});

	swiper.on('slideChange', function () {
		const observer = lozad('.lazy');
		observer.observe();
	});

	swiper2.on('slideChange', function () {
		const observer = lozad('.lazy');
		observer.observe();
	});

});