$(document).ready(function () {

	$('.js-mob-catalog-menu').on('click', function() {
		$(this).parents('.bottom-nav').find('.bottom-nav__catalog-menu').fadeToggle(180);
		$('body').toggleClass('js-no-scroll');
	});

	$('.js-toggle-full-menu').on('click', function() {
		$('body').toggleClass('open-mob-menu');
		$('body').toggleClass('js-no-scroll');
		$('.mob-nav__full-menu').toggleClass('is-open');
	});

	$('.mob-catalog-menu__toggle-btn').on('click', function() {
        $(this).parents('.mob-catalog-menu__section').toggleClass('is-open');
        $(this).parents('.mob-catalog-menu__section').find('.mob-catalog-menu__subsections').slideToggle(180);
    });

});